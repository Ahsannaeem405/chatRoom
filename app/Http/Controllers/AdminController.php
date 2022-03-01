<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\footer;
use App\Models\likeMessage;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function appearance(){
        return view('dashboard.appearance');

    }
    public function setting(){
        $user['user']=User::where('id',Auth::user()->id)->first();
        return view('dashboard.setting',$user);

    }
    public function updateProfile(Request $request,$id)
    {
     
        $user = User::find(Auth::user()->id);
        if(isset($request->profile))
        {
        $image=$request->file('profile');
        $imageName = $image->getClientOriginalName();
  
        $user->update([
            'profile' => $imageName,
        ]);
        $path=$image->move(public_path('image'),$imageName);
        }
  
  
  
        $user->update([
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
  
    ]);
        

       if(isset($request->c_password))
       {
         $request->validate([
            'new_password' => 'required|min:8',
            'confirm_password' => 'required_with:password|same:new_password|min:8'

        ]);
        if(Hash::check($request->c_password,$user->password)) {
                $user->update([
            'password' => Hash::make($request->new_password),
        ]);
           
            return redirect()->back()->with('success',"Your profile has been updated!");


        }else{
            return redirect()->back()->with('error',"Your Password does't match!");

        }
      }else{
          return redirect()->back()->with('success','Your profile has been updated!');
      }
    }
    public function Ip(){
        return view('dashboard.Ip');

    }

    public function header(){
        $header_footer['header_footer']=Footer::first();
        return view('dashboard.header',$header_footer);

    }

    public function update_header(Request $request ,$id)
    {
        //dd($id);
        $header=Footer::find($id);
        if(isset($request->h_image))
        {
        $image=$request->file('h_image');
        $imageName = $image->getClientOriginalName();
        $header->h_image=$imageName;
        $path=$image->move(public_path('header'),$imageName);
           
        }
        if(isset($request->f_image))
        {
        $image=$request->file('f_image');
        $imageName = $image->getClientOriginalName();
        $header->f_image=$imageName;
        $path=$image->move(public_path('header'),$imageName);
           
        }
        $header->save();
        return redirect()->back()->with('success','Header Updated Successfully!');

    }
    public function role(){
        $user['user']=User::where('type_user','user')->get();
        return view('dashboard.role',$user);

    }
    public function user_delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->back()->with('error','User Deleted Successfully!');
    

    }
    public function update_user(Request $request,$id)
    {
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->username=$request->username;
        $user->save();
        return redirect()->back()->with('success','User Updated Successfully!');

    }
    public function clearguest(){
        $guestCount['guestCount']=User::where('type_user','guest')->count();

        return view('dashboard.clearguest',$guestCount);

    }

    public function delete_guest()
    {
      
         User::getQuery()->where('type_user','guest')->delete();

        return redirect()->back()->with('error','All guest user clear  Successfully!');

    }
    public function clearchat(){
        $chatCount['chatCount']=Message::count();
       //dd( $chatCount);
        return view('dashboard.clearchat',$chatCount);

    }
    public function delete_chat()
    {
      
         Message::getQuery()->delete();

        return redirect()->back()->with('error','All Chat clear  Successfully!');

    }
    public function radio(){
        return view('dashboard.radio');

    }
    public function index()
    {
        $user=User::where('role','user')->count();
        return view('dashboard.index',compact('user'));
    }

    public function users()
    {
        $users=User::where('role','user')->get();
        return view('dashboard.users.index',compact('users'));
    }
    public function userDelete($id)
    {
        $counter=User::find($id)->delete();
        return back()->with('success','User deleted successfully');

    }
}
