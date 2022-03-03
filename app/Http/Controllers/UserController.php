<?php

namespace App\Http\Controllers;

use App\Events\sendMessage;
use App\Models\likeMessage;
use App\Models\Message;
use App\Models\radio;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function guest(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'unique:users'],
        ]);

        $user = new User();
        $user->name = $request->username;
        $user->email = $request->username . '@guest.com';
        $user->username = $request->username;
        $user->role = 'user';
        $user->type_user = 'guest';
        $user->profile = 'avatar.jpg';
        $user->password = \Hash::make('12345678');
        $user->save();
        \Auth::login($user);

        $message = new Message();
        $message->user_id = \Auth::user()->id;
        $message->type = 'join';
        $message->save();

        $event = event(new sendMessage($message, $user));
        return redirect('/user/chat');

    }

    public function chat()
    {
        $message = Message::with('user','likeuser')->get();
        $like=likeMessage::where('message_user_id')->count();

        $members = User::where('role', 'user')->get();
        $radio = radio::first();
        $profile = \Auth::user();
        // dd( $profile->name);
        return view('chat.index', compact('message', 'members', 'profile','like','radio'));
    }
    public function report(Request $request)
    {

        $report=new Report();
        $report->report=$request->report;
        $report->comment=$request->comment;
        $report->msg_id=$request->msg_id;
        $report->msg_user_id=$request->msg_user_id;
        $report->user_rep_id=$request->user_rep_id;
        $report->save();
    }
    public function updateProfileUser(Request $request ,$id)
    {
        $user=User::find($id);
        $user->name=$request->name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=\Hash::make($request->password);
        if (isset($request->profile)) {
            $image = $request->file('profile');
            $imageName = $image->getClientOriginalName();
            $user->profile=$imageName;
            $path = $image->move(('image'), $imageName);
        }
        $user->save();
        return redirect()->back()->with('success', "Your profile has been updated!");

    }
    public function vistUserProfile(Request $request)
    {
        $user['userProfile']=User::find($request->id);
        $user['like']=likeMessage::where('message_user_id')->count();
        return view('chat.vistProfileUser',$user);
    }
    public function sendMSG(Request $request)
    {
        $message = new Message();
        $message->user_id = \Auth::user()->id;
        $message->type = 'text';
        $message->message = $request->message;
        $message->save();
        $user = User::find(\Auth::user()->id);
        $event = event(new sendMessage($message, $user));
        
        return response()->json($event);
    }

    public function getMSG(Request $request)
    {
      
        $message['message'] =Message::where('id',$request->id)->get();
    
        return view('chat/getMesg',$message);
    }

    public function deletemessage(Request $request)
    {

        $id = $request->id;
        $msg = Message::find($id)->delete();
    }

    public function likemessage(Request $request)
    {
        $status=$request->status;
        if($status=='like')
        {
            $id = $request->id;
            $msg = Message::find($id);
            $user = \Auth::user()->id;
            $messageUser = $msg->user_id;

            $like = new likeMessage();
            $like->user_id = $user;
            $like->message_user_id = $messageUser;
            $like->message_id = $msg->id;
            $like->save();
        }
        else{
          $find=likeMessage::where('message_id',$request->id)->where('user_id',\Auth::user()->id)->delete();
        }

    }
}
