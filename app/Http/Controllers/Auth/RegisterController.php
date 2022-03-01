<?php

namespace App\Http\Controllers\Auth;

use App\Events\sendMessage;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\footer;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected function redirectTo(){


        if (\Auth::user()->role== 'user') {
            $message=new Message();
            $message->user_id=\Auth::user()->id;
            $message->type='join';
            $message->save();
            $user=User::find(\Auth::user()->id);
            $event=event(new sendMessage($message,$user));
            return '/user/chat';
        }
        elseif (\Auth::user()->role== 'admin') {
            return '/admin/index';
        }


        return redirect()->back()->withError('whoops! You are not authorized to visit this link.');

    }


    public function showRegistrationForm()
    {
        $header = footer::first();
     

        return view('auth.login', compact('header'));
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }




    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'username' => $data['username'],
            'role' => 'user',
            'type_user' => 'user',
            'profile' => 'avatar.jpg',
        ]);
    }
}
