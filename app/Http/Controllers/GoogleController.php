<?php

namespace App\Http\Controllers;

use App\Events\sendMessage;
use App\Models\Message;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class GoogleController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {

         return Socialite::driver('google')->redirect();

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
      // dd(122111);

        try {

            $user =  Socialite::driver('google')->stateless()->user();

            $finduser = User::where('google_id', $user->id)->orwhere('email', $user->email)->first();
            if($finduser){

                Auth::login($finduser);


                $message = new Message();
                $message->user_id = \Auth::user()->id;
                $message->type = 'join';
                $message->save();

                $user->updated_at=date('Y-m-d h:i:s');
                $user->status='online';
                $user->save();

                $event = event(new sendMessage($message, $finduser));


                return redirect('/user/chat');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'username' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'type_user'=> 'social',
                    'role'=> 'user',
                    'password' => encrypt('12345678')
                ]);

                Auth::login($newUser);



                $message = new Message();
                $message->user_id = \Auth::user()->id;
                $message->type = 'join';
                $message->save();

                $user->updated_at=date('Y-m-d h:i:s');
                $user->status='online';
                $user->save();

                $event = event(new sendMessage($message, $newUser));



                return redirect('/user/chat');
            }

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
