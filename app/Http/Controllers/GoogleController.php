<?php

namespace App\Http\Controllers;

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
      
                return redirect('/user/chat');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'username' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'type_user'=> 'social',
                    'password' => encrypt('12345678')
                ]);
      
                Auth::login($newUser);
      
                return redirect('/user/chat');
            }
      
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
