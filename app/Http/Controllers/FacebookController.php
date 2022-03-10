<?php

namespace App\Http\Controllers;

use App\Events\sendMessage;
use App\Models\Message;
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



                $message = new Message();
                $message->user_id = \Auth::user()->id;
                $message->type = 'join';
                $message->save();

                $user=User::find(\Auth::user()->id);
                $user->updated_at=date('Y-m-d h:i:s');
                $user->status='online';
                $user->save();

                $event = event(new sendMessage($message, $finduser));



                return redirect('/user/chat');
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
                    'role'=> 'user',
                    'password' => encrypt('123456dummy')
                ]);

                Auth::login($newUser);


                $message = new Message();
                $message->user_id = \Auth::user()->id;
                $message->type = 'join';
                $message->save();

                $user=User::find(\Auth::user()->id);
                $user->updated_at=date('Y-m-d h:i:s');
                $user->status='online';
                $user->save();

                $event = event(new sendMessage($message, $newUser));

                return redirect('/user/chat');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
