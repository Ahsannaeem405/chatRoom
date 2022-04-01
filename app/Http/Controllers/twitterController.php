<?php

namespace App\Http\Controllers;

use App\Events\sendMessage;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class twitterController extends Controller
{
    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function cbTwitter()
    {
        try {

            $user = Socialite::driver('twitter')->stateless()->user();

            $finduser = User::where('twitter_id', $user->id)->orwhere('email', $user->email)->first();

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

            }
            else{
                $newUser = User::create([
                    'name' => $user->name,
                    'username' => $user->name,
                    'email' => $user->email,
                    'twitter_id'=> $user->id,
                    'type_user'=> 'social',
                    'password' => encrypt('admin595959')
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

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

}
