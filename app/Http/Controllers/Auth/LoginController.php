<?php

namespace App\Http\Controllers\Auth;

use App\Events\sendMessage;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
$event=new sendMessage($message,$user);
            return '/user/chat';
        }
        elseif (\Auth::user()->role== 'admin') {
            return '/admin/index';
        }


        return redirect()->back()->withError('whoops! You are not authorized to visit this link.');

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
