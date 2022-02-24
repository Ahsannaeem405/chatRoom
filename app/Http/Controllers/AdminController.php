<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function appearance(){
        return view('dashboard.appearance');

    }
    public function setting(){
        return view('dashboard.setting');

    }

    public function Ip(){
        return view('dashboard.Ip');

    }

    public function header(){
        return view('dashboard.header');

    }
    public function role(){
        return view('dashboard.role');

    }
    public function clearguest(){
        return view('dashboard.clearguest');

    }
    public function clearchat(){
        return view('dashboard.clearchat');

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
