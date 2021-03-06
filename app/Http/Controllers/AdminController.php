<?php

namespace App\Http\Controllers;

use App\Models\ipaddress;
use App\Models\radio;
use App\Models\socialSetting;
use App\Models\sticker;
use App\Models\User;
use App\Models\footer;
use App\Models\likeMessage;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index()
    {
        $user = User::where('type_user', 'user')->count();
        $guest = User::where('type_user', 'guest')->count();
        $social = User::where('type_user', 'social')->count();
        $message=Message::all()->count();
        return view('dashboard.index', compact('user','guest','social','message'));
    }

    public function social()
    {
        $social = socialSetting::first();
        return view('dashboard.social.index', compact('social'));
    }

    public function socialUpdate(Request $request)
    {
        $social = socialSetting::first();
        $social->googleClient = $request->googleClient;
        $social->googleSecret = $request->googleSecret;
        $social->facebookClient = $request->facebookClient;
        $social->facebookSecret = $request->facebookSecret;
        $social->twitterClient = $request->twitterClient;
        $social->twitterSecret = $request->twitterSecret;
        $social->save();
        return back()->with('success', 'seting update successfully');
    }

    public function users()
    {
        $users = User::whereIn('type_user', ['guest', 'user', 'social'])->get();
        return view('dashboard.users.index', compact('users'));
    }

    public function userDelete($id)
    {
        $counter = User::find($id)->delete();
        return back()->with('success', 'User deleted successfully');

    }

    public function appearance()
    {
        return view('dashboard.appearance');

    }

    public function setting()
    {
        $user['user'] = User::where('id', Auth::user()->id)->first();
        return view('dashboard.setting', $user);

    }

    public function updateProfile(Request $request, $id)
    {

        $user = User::find(Auth::user()->id);
        if (isset($request->profile)) {
            $image = $request->file('profile');
            $imageName = $image->getClientOriginalName();

            $user->update([
                'profile' => $imageName,
            ]);
            $path = $image->move(('image'), $imageName);
        }


        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,

        ]);




    }

    public function sticker()
    {
        $sticker = sticker::all();
        return view('dashboard.sticker.sticker', compact('sticker'));
    }

    public function storeSticker(Request $request)
    {
        $sticket = new sticker();
        if (isset($request->gif)) {
            $image = $request->file('gif');
            $imageName = $image->getClientOriginalName();

            $path = $image->move(('sticker'), $imageName);
            $sticket->sticker=$imageName;
        }

        $sticket->save();
        return back()->with('success','GIF store successfully');

    }

    public function deleteSticker($id)
    {
        $sticker=sticker::find($id)->delete();
        return back()->with('success','GIF deleted successfully');
    }

    public function updateSticker($id,Request $request)
    {
        $sticker=sticker::find($id);
        if (isset($request->gif)) {
            $image = $request->file('gif');
            $imageName = $image->getClientOriginalName();

            $path = $image->move(('sticker'), $imageName);
            $sticker->sticker=$imageName;
        }
        $sticker->update();
        return back()->with('success','GIF updated successfully');
    }

    public function Ip()
    {
        $ips = ipaddress::all();
        return view('dashboard.ip.Ip', compact('ips'));

    }

    public function addIp(Request $request)
    {
        $ipaddress = new ipaddress();
        $ipaddress->ip = $request->ip;
        $ipaddress->save();
        return back()->with('success', 'IP address save successfully');
    }

    public function delIp($id)
    {
        $ip = ipaddress::find($id)->delete();
        return back()->with('success', 'IP address deleted successfully');
    }

    public function updateIp(ipaddress $id, Request $request)
    {


        $id->ip = $request->ip;
        $id->update();
        return back()->with('success', 'IP address updated successfully');
    }

    public function header()
    {
        $header_footer['header_footer'] = Footer::first();
        return view('dashboard.header.header', $header_footer);

    }

    public function update_header(Request $request, $id)
    {
        //dd($id);
        $header = Footer::find($id);
        if (isset($request->h_image)) {
            $image = $request->file('h_image');
            $imageName = $image->getClientOriginalName();
            $header->h_image = $imageName;
            $path = $image->move(('header'), $imageName);
        }

        $header->save();
        return redirect()->back()->with('success', 'Header Updated Successfully!');

    }


    public function clearguest()
    {
        $guestCount['guestCount'] = User::where('type_user', 'guest')->count();

        return view('dashboard.clearguest.clearguest', $guestCount);

    }

    public function delete_guest()
    {

        User::getQuery()->where('type_user', 'guest')->delete();

        return redirect()->back()->with('success', 'All guest user clear  Successfully!');

    }

    public function clearchat()
    {
        $chatCount['chatCount'] = Message::count();
        //dd( $chatCount);
        return view('dashboard.clerarchat.clearchat', $chatCount);

    }

    public function delete_chat()
    {

        Message::getQuery()->delete();

        return redirect()->back()->with('success', 'All Chat clear  Successfully!');

    }

    public function radio()
    {

        $radio = radio::first();
        return view('dashboard.radio.radio', compact('radio'));

    }

    public function radioUpdate(Request $request)
    {
        $radio = radio::first();
        if (isset($request->image)) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $radio->image = $imageName;
            $path = $image->move('radio', $imageName);

        }
        $radio->radio = $request->radio;
        $radio->title = $request->title;
        $radio->update();

        return back()->with('success', 'radio setting updatesuccessfully');
    }


}
