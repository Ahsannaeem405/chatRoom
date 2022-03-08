{{-- @dd($userProfile); --}}
<div class="container-fluid bg-dark2 text-center p-2 rounded-bottom">
    <div class="mb-3">

        <img src="{{asset('image')}}/{{$userProfile->profile}}"
        class="rounded-circle img_circle" data-toggle="modal" data-target="#editProfile" alt=""  width="80" height="80">
        <h5 class="text-white mt-1">{{$userProfile->name}}
        <br><small><span>@</span>{{$userProfile->username}}</small></h5>
    </div>
    <button data-toggle="modal" data-target="#editProfile" class="btn btn-success btn_gra">Message</button>

    <div class="d-flex text-light pt-4 justify-content-center bg-dark"
         style="margin-top: -10px">
        <div class="border_right  p-2">
            <b>{{$like}}</b><br>
            <p>Likes</p>
        </div>
        <div class="border_right  p-2">
            <b>{{$reports}}</b><br>
            <p>Reports</p>
        </div>
        <div class="p-2">
            <b>{{date('d-M-y',strtotime($userProfile->updated_at))}}</b><br>
            <p>Last Login</p>
        </div>
    </div>

</div>
