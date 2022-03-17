<?php

namespace App\Http\Controllers;

use App\Events\sendMessage;
use App\Models\likeMessage;
use App\Models\Message;
use App\Models\radio;
use App\Models\Report;
use App\Models\sticker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;
use Carbon\Carbon;
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




        $giftenor=\Http::get('https://g.tenor.com/v1/random?q=excited&key=LIVDSRZULELA&limit=12&media_filter=gif');

        $giftenor=json_decode($giftenor->body());
    //    $giftenor=[];

        $message = Message::with('user', 'likeuser', 'sticker')->get();
        $like = likeMessage::where('message_user_id', \Auth::user()->id)->count();
        $likedata = likeMessage::where('message_user_id', \Auth::user()->id)->get();

        $onlineusers = User::where('role', '!=', 'admin')->get();
        // foreach($onlineusers as $onlineuser)
        // {
        //       $to_time=strtotime(date('Y-m-d h:i:s'));
        // $from_time=strtotime( $onlineuser->activity); 
        // $activityTime= round(abs($to_time - $from_time) / 60,2);
        // if(ceil($activityTime) < 5)
        // {
        //     echo 'hi';
        // }
        // //var_dump(ceil($activityTime));
        //  }
        // die();
        // $to_time=strtotime(date('Y-m-d h:i:s'));
        // $from_time=strtotime( $onlineusers[2]->activity); 
        // $activityTime= round(abs($to_time - $from_time) / 60,2);
        // // dd( $onlineusers);
        // dd( $activityTime, $onlineusers[0]->activity);
    //    dd( $onlineusers);
     
        // dd(Carbon::now()->subMinutes(5)->toDateTimeString());

        $reports = Report::where('msg_user_id', \Auth::user()->id)->count();
        $reportdata = Report::where('msg_user_id', \Auth::user()->id)->get();

        $gifs = sticker::all();

        $members = User::where('role', 'user')->get();
        $radio = radio::first();
        $profile = \Auth::user();
        // dd( $profile->name);
        return view('chat.index', compact('giftenor','reportdata', 'onlineusers', 'likedata', 'reports', 'message', 'members', 'profile', 'like', 'radio', 'gifs'));
    }

    public function report(Request $request)
    {

        $report = new Report();
        $report->report = $request->report;
        $report->comment = $request->comment;
        $report->msg_id = $request->msg_id;
        $report->msg_user_id = $request->msg_user_id;
        $report->user_rep_id = $request->user_rep_id;
        $report->save();
    }

    public function updateProfileUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);

        if (isset($request->profile)) {
            $image = $request->file('profile');
            $imageName = $image->getClientOriginalName();
            $user->profile = $imageName;
            $path = $image->move(('image'), $imageName);
        }
        $user->save();
        return redirect()->back()->with('success', "Your profile has been updated!");

    }

    public function vistUserProfile(Request $request)
    {
        $user['userProfile'] = User::find($request->id);
        $user['like'] = likeMessage::where('message_user_id', $request->id)->count();
        $user['reports'] = Report::where('msg_user_id', $request->id)->count();
        return view('chat.vistProfileUser', $user);
    }

    public function nextGif(Request $request)
    {
        $next=$request->next;
        $giftenor=\Http::get('https://g.tenor.com/v1/random?q=excited&key=LIVDSRZULELA&limit=12&media_filter=gif&pos='.$next.'');

        $giftenor=json_decode($giftenor->body());

        return view('chat.nextGif',compact('giftenor'));

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

    public function sendGIF(Request $request)
    {
        $message = new Message();
        $message->user_id = \Auth::user()->id;
        if ($request->type=='admin')
        {
            $message->type = 'gif';
        }
       else{
           $message->type = 'gifTenor';
       }
        $message->message = $request->message;
        $message->save();
        $user = User::find(\Auth::user()->id);
        $event = event(new sendMessage($message, $user));

        return response()->json($event);
    }

    public function searchMSG(Request $request)
    {

        if ($request->text != null) {
            $message['message'] = Message::where('message', 'like', "%$request->text%")->get();
        } else {
            $message['message'] = Message::all();
        }


        return view('chat.getMesg', $message);
    }

    public function getMSG(Request $request)
    {

        $message['message'] = Message::where('id', $request->id)->get();

        return view('chat.getMesg', $message);
    }

    public function deletemessage(Request $request)
    {

        $id = $request->id;
        $msg = Message::find($id)->delete();
    }

    public function likemessage(Request $request)
    {
        $status = $request->status;
        if ($status == 'like') {
            $id = $request->id;
            $msg = Message::find($id);
            $user = \Auth::user()->id;
            $messageUser = $msg->user_id;

            $like = new likeMessage();
            $like->user_id = $user;
            $like->message_user_id = $messageUser;
            $like->message_id = $msg->id;
            $like->save();
        } else {
            $find = likeMessage::where('message_id', $request->id)->where('user_id', \Auth::user()->id)->delete();
        }

    }
}
