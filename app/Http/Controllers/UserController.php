<?php

namespace App\Http\Controllers;

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

        $user=new User();
        $user->name=$request->username;
        $user->email=$request->username.'@guest.com';
        $user->username=$request->username;
        $user->role='user';
        $user->password=\Hash::make('12345678');
        $user->save();
        \Auth::login($user);
        return redirect('/user/chat');

    }

    public function chat()
    {
return view('chat.index');
    }
}
