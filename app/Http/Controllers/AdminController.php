<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
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
