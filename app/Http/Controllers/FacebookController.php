<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
          
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
    
        try {
        
            $user = Socialite::driver('facebook')->stateless()->user();
         
            $finduser = User::where('facebook_id', $user->id)->orwhere('email', $user->email)->first();
        
            if($finduser){
         
                Auth::login($finduser);
                
                return view('chat/index');
         
            }else{

                if($user->email==null)
                {
                    $rm=time().'@gmail.com';
                }
                else{
                    $rm=$user->email;
                }

                $newUser = User::create([
                    'name' => $user->name,
                    'username' => $user->name,
                    'email' => $rm,
                    'facebook_id'=> $user->id,
                    'type_user'=> 'social',
                    'password' => encrypt('123456dummy')
                ]);
        
                Auth::login($newUser);
                return view('chat/index');
                // return redirect('/user/chat');
            }
        
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
