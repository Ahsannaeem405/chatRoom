<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('chat/css/style.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>Chat</title>
    <style>
        .navmbl {
            font-size: 15px !important;
        }
        .chat-text_gif{
            width: 60% !important;
        }
        .emojionearea-editor{
          color: white !important;
        }
        /*.userdropdown{*/
        /*    left: -100px !important;*/
        /*}*/
            .search{
                display: none;
            }
    </style>


    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700'>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" media="screen">
    <!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/emojione/1.5.2/assets/sprites/emojione.sprites.css" media="screen">-->
    <link rel="stylesheet" type="text/css" href="{{asset('emojy/stylesheet.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('emojy/dist/emojionearea.min.css')}}" media="screen">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="http://mervick.github.io/lib/google-code-prettify/skins/tomorrow.css"
          media="screen">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/emojione/1.5.2/lib/js/emojione.min.js"></script>-->
    <!--<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emojione@3.1.2/lib/js/emojione.min.js"></script>-->
    <!--<script type="text/javascript" src="../node_modules/emojione/lib/js/emojione.js"></script>-->
    <script type="text/javascript" src="http://mervick.github.io/lib/google-code-prettify/prettify.js"></script>
    <!--<script>
      window.emojioneVersion = "3.1";
    </script>-->
    <script type="text/javascript" src="{{asset('emojy/dist/emojionearea.js')}}"></script>


</head>


<script type="text/javascript">
    $(document).ready(function () {
        $("#standalone").emojioneArea({
            standalone: true,
            autocomplete: false
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#text_msg").emojioneArea();
    });
</script>
{{-- <div id="standalone" data-emoji-placeholder=":smiley:"></div>

@php
die();
@endphp --}}
<body class="con-back p-0">


@php
    // die();
@endphp
<div class="container-fluid p-0 " style="height: 100vh">



    <div class="modal fade" id="editProfile" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="exampleModalLongTitle">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span class="text-white" aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body bg-dark">
                    <div class="col-md-12">
                        <form method="POST"
                              action="{{url('user/updateProfileUser')}}/{{$profile->id}}"
                              enctype="multipart/form-data">
                            @csrf
                            <img src="{{asset('image')}}/{{$profile->profile}}" alt=""
                                 class="rounded-circle img_circle mt-2 mb-3" width="80"
                                 height="80">

                            <div class="form-group row">
                                <label for="inputPassword3"
                                       class="col-sm-3 col-form-label text-white">Profile</label>
                                <div class="col-sm-9">
                                    <input type="file" name="profile"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3"
                                       class="col-sm-3 col-form-label text-white">Full
                                    Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name"
                                           value="{{$profile->name}}"
                                           class="form-control"
                                           placeholder="Enter Name">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3"
                                       class="col-sm-3 col-form-label text-white">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" name="username"
                                           value="{{$profile->username}}"
                                           class="form-control"
                                           placeholder="Enter Username">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3"
                                       class="col-sm-3 col-form-label text-white">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email"
                                           value="{{$profile->email}}"
                                           class="form-control "
                                           placeholder="Enter Email">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3"
                                       class="col-sm-3 col-form-label text-white">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password"
                                           class="form-control"
                                           placeholder="Enter Password">

                                </div>
                            </div>

                            <button type="submit"
                                    class="btn btn-primary btn_gra text-center my-3 col-4">
                                Update Profile
                            </button>
                        </form>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- mobile side bar start -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="col-12">
            <div class="w-100 bg-dark d-flex justify-content-between p-3">
                <div class="d-flex">
                    <div class="user-info">
                        @if(isset($profile->profile))

                            <img src="{{asset('image')}}/{{$profile->profile}}"
                                 class="imgCircle myprofile" style="width: 40px;height:40px;border-radius:50%" alt="">
                        @else
                            <img src="{{asset('chat/image/782-gr-R8Mt30L6pg.png')}}"
                                 class="imgCircle myprofile" style="width: 40px;height:40px;border-radius:50%">
                        @endif
                        <div class="user-profile">
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#editProfile" id="profile"> Edit
                                        Profile</a></li>
                                <li><a href="{{URL::to('/logout')}}"> Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                    <div style="line-height: 2px;" class="text-light ml-2 pt-1">
                        <p>{{$profile->name}}</p>
                        <p>{{'@'}}{{$profile->username}}</p>
                    </div>
                </div>

                <div class="d-flex  justify-content-end">
                    <button class="btn3" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu bg-dark drop2" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item text-light" href="#">Default</a>
                            <a class="dropdown-item text-light" href="#">English</a>

                        </div>
                        <img src="{{asset('chat/image/flag-Stars-and-Stripes-May-1-1795.jpg')}}"
                             width="20" height="20" class="rounded-circle" alt="">
                    </button>

                </div>
            </div>

            <div class="w-100 bg-dark3 d-flex p-2">
                <div class="row">
                    <div class="col-md-9">
                        <div class="d-flex" style="align-items: center">
                            <img src="{{asset('radio')}}/{{$radio->image}}" width="50" height="50"
                                 class="rounded-circle" alt="">

                            <div class="text-light ml-2 pt-2">
                                <p>Radio</p>
                                <marquee width="80%" direction="right">
                                    {{$radio->title}}
                                </marquee>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex  justify-content-end " style="align-items: center;">
                            <a href="#" class="text-light"><i class="fas fa-step-backward"></i></a>
                            <a href="#" class="text-light">
                                <i class="fas fa-play"></i>
                                <i class="fas fa-pause"></i>
                            </a>
                            <a href="#" class="text-light"><i class="fas fa-step-forward"></i></a>
                            <audio src="{{($radio->radio)}}" audio="{{$radio->radio}}" class="audio" controls></audio>
                        </div>
                    </div>

                </div>


            </div>


            <div class="w-100">
                <div class=" p-2">

                    <div class="col-12">


                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link tablink navmbl" data-toggle="tab" href="#tabs-3" role="tab">Alert</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tablink onlinetab navmbl" data-toggle="tab" href="#tabs-4"
                                   role="tab">Online Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link myprofile navmbl" data-toggle="tab" href="#" role="tab">Profile</a>
                            </li>


                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="row table-responsive text-center text-light" style="height: 40vh;margin: 0">
                                    @if(count($likedata)==0 && count($reportdata)==0)
                                        <h3>0</h3>
                                        <h3>Alerts</h3>
                                    @endif
                                    @foreach($likedata as $likedatas)
                                        <div class="col-12 text-center text-light alert_div pt-1 pb-1 p-0">
                                            <div class="w-100 bg-dark d-flex justify-content-between p-3">
                                                <div class="d-flex">
                                                    <div>
                                                        <img src="{{asset('image/'.$likedatas->user->profile)}}"
                                                             width="40"
                                                             class="rounded" alt=""></div>

                                                    <div style="line-height: 2px;"
                                                         class="text-light ml-2 pt-2 text-left ">
                                                        <p>{{$likedatas->user->name}}</p>
                                                        <p>Liked your message</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach($reportdata as $reportdatas)
                                        <div class="col-12 text-center text-light alert_div pt-1 pb-1">
                                            <div class="w-100 bg-dark d-flex justify-content-between p-3">
                                                <div class="d-flex">
                                                    <div>
                                                        <img src="{{asset('image/'.$reportdatas->user->profile)}}"
                                                             width="40"
                                                             class="rounded" alt=""></div>

                                                    <div style="line-height: 2px;"
                                                         class="text-light ml-2 pt-2 text-left ">
                                                        <p>{{$reportdatas->user->name}}</p>
                                                        <p>Reported your message</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="row table-responsive text-center text-light" style="height: 40vh">
                                    @if(count($onlineusers)==0)
                                        <h3>0</h3>
                                        <h3>Alerts</h3>
                                    @endif
                                    @foreach($onlineusers as $onlineuser)
                                        <div class="col-12 text-center text-light alert_div pt-1 pb-1">
                                            <div class="w-100 bg-dark d-flex justify-content-between p-3">
                                                <div class="d-flex">
                                                    <div>
                                                        <img src="{{asset('image/'.$onlineuser->profile)}}" width="40"
                                                             class="rounded" alt=""></div>

                                                    <div style="line-height: 2px;"
                                                         class="text-light ml-2 pt-2 text-left ">
                                                        <p>{{$onlineuser->name}}</p>
                                                        <p style="color: green">online</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

            <div class="position-relative profile_div">


                <div class="container-fluid  bg-dark2 text-center p-2 rounded-bottom">
                    <div class="mb-3">
                        @if(isset($profile->profile))

                            <img src="{{asset('image')}}/{{$profile->profile}}"
                                 class="rounded-circle img_circle" data-toggle="modal"
                                 data-target="#editProfile" width="80" height="80" alt="">
                        @else
                            <img src="{{asset('chat/image/782-gr-R8Mt30L6pg.png')}}"
                                 class="rounded-circle img_circle" data-toggle="modal"
                                 data-target="#editProfile" alt="" width="80" height="80">
                        @endif


                    </div>


                    <button data-toggle="modal" data-target="#editProfile"
                            class="btn btn-success btn_gra">Edit Profile
                    </button>


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
                            <b>{{date('d-M-y',strtotime($profile->updated_at))}}</b><br>
                            <p>Last Login</p>
                        </div>
                    </div>

                </div>
            <!-- <div class="Scroll_div">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 mt-2 bg-dark2 p-2 text-light">
                                                <h6>Profile link:</h6>
                                                <div class="left_border p-2">
                                                    <p>https://nycrhythm.net/chat/group/782/</p>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2 bg-dark2 p-2 text-light  ">
                                                <h6>Embed Code :</h6>
                                                <p class=" left_border p-2">
                                                    {{'<iframe width="411px" height="650px" allow="camera;microphone"
                                                              src="https://nycrhythm.net/chat/rehmanjqvps/" frameborder=0
                                                              allowfullscreen></iframe>'}}
                </p>

            </div>

        </div>
    </div>
</div> -->

            </div>

            <div class="position-relative visit_div" style="display: none">
                <div class="container-fluid vistProfile bg-dark2 text-center p-2 rounded-bottom">

                </div>


            </div>
            <div class="w-100 text-center">
                <button class="share-btn mobile" text="{{url()->current()}}">Share</button>
            </div>
        </div>
    </div>

    <!-- Content wrapper start -->
    <div class="content-wrapper ">
        <!-- Row start -->
        <div class="row gutters m-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                <div class="card m-0">
                    <!-- Row start -->
                    <div class="row no-gutters m-0">
                        <div class="col-lg-8 col-12 bg_black">
                            <div class="col-12 p-0 view-control">
                                <iframe width="100%" src="https://www.youtube.com/embed/Kl9zXkIIkgg"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                <div class="w-100 bg-dark div1">

                                    <div class="w-100">
                                        <div class="col-12 d-flex pl-3 member_div justify-content-between">
                                            <div class="d-flex">
                                                <span style="font-size:28px;cursor:pointer;" class="collape text-light"
                                                      onclick="openNav()">&#9776;</span>
                                            <!-- <img src="{{asset('chat/image/782-gr-R8Mt30L6pg.png')}}" width="30"
                                                     class="rounded mx-2" alt="">
                                                <p class="pl-2 justify-content-end mb-0">{{$members->count()}}
                                                Members</p> -->
                                            </div>

                                            <h5 class="mb-0 ml-4 mt-4 tab-play"><span><i class="fa fa-caret-up"
                                                                                         aria-hidden="true"></i></span>
                                                Tap play</h5>
                                            <div>
                                                <i class="fa fa-search mr-2 search_icon"></i>
                                                <button class="button_dots" id="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"><i class="fa fa-ellipsis-h"></i></button>
                                                <div class="dropdown-menu bg-dark userdropdown" aria-labelledby="dropdownMenuButton">

                                                    <a class="dropdown-item text-light onlineuser" href="#">Online
                                                        Users</a>
                                                    <a class="dropdown-item text-light myprofile" href="#">Profile</a>
                                                    <a class="dropdown-item text-light fa-play2 " href="#">Radio</a>
                                                    {{--                                                    <a class="dropdown-item text-light" href="#">Chat Options</a>--}}
                                                    <a class="dropdown-item text-light" href="#"
                                                       onclick="setLighttheme()">Light Mode</a>
                                                    <a class="dropdown-item text-light" href="#"
                                                       onclick="setdarktheme()">Dark Mode</a>
                                                    @if(Auth::user()->role=='admin')
                                                        <a class="dropdown-item text-light"
                                                           href="{{url('admin/delete_chat')}}">Delete Chat</a>
                                                @endif
                                                <!-- <a class="dropdown-item text-light" href="#">Delete Chat</a>
                                                    <a class="dropdown-item text-light" href="#">Messages</a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1 search_div d-none position-absolute"
                                             style="z-index: 1000;background-color: black">
                                            <form action="#" class="d-flex " style="align-items: center" method="post">
                                                <input type="text" name="search" placeholder="Search"
                                                       class="form-control input_search">
                                                <i class="fa fa-search-minus ml-2 clear_search"
                                                   style="font-size: 20px"></i>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="chat-container">
                                <ul class="chat-box chatContainerScroll">

                                    @foreach($message as $msg)
                                        @if($msg->type=='join')
                                            <li class="text-center text-dark w-lg-50ml-lg-auto mr-lg-auto mb-2">
                                                <div class="bg_time p-1">
                                                    <span class="text-success font-weight-bold">{{$msg->user->username}} :</span>
                                                    Joined the Group Chat ({{$msg->created_at}})
                                                </div>

                                            </li>


                                        @elseif($msg->type=='text')

                                            @if($msg->user_id==Auth::user()->id)
                                                <li class="my-chat mb-4   text-end message{{$msg->id}}">
                                                    <div class="chat-hour">
                                                        <div class="icons">

                                                            {{--                                                            <a href="#"><i class="fas fa-reply"></i></a>--}}
                                                            <a style="cursor:pointer;" class=""><i
                                                                    class="fa fa-trash delete"
                                                                    message="{{$msg->id}}"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="chat-text">
                                                        <span
                                                            class="orange">{{$msg->user->name}} : </span>{{$msg->message}}
                                                        <div class="chat-details">{{$msg->created_at}}</div>

                                                    </div>
                                                    <div class="chat-avatar">

                                                        <img src="{{asset('image/'.$msg->user->profile.'')}}"
                                                             alt="Retail Admin" class="imgCircle">

                                                        <!-- <div class="chat-name">Sam</div> -->
                                                    </div>
                                                </li>
                                            @else
                                                <li class="your-chat mb-3">
                                                    <div class="chat-avatar">

                                                        <img class="vistProfile" vist="{{$msg->user->id}}"
                                                             src="{{asset('image/'.$msg->user->profile.'')}}"
                                                             alt="Retail Admin">

                                                    </div>
                                                    <div class="chat-text"><span
                                                            class="purple">{{$msg->user->name}} :</span> {{$msg->message}}
                                                        <div class="chat-details">
                                                            {{$msg->created_at}}
                                                        </div>
                                                    </div>


                                                    <div class="chat-hour">
                                                        <div class="icons ">
                                                            <a><i msgid="{{$msg->id}}" msguser="{{$msg->user_id}}"
                                                                  class="fa fa-flag reportmsg"></i></a>


                                                            <!-- <a href="#" class="ml-2"><i class="fas fa-reply"></i></a> -->
                                                            <a style="cursor: pointer" class="ml-2"><i
                                                                    class="far  {{count($msg->likeuser)>=1 ? 'fa-thumbs-down' : 'fa-thumbs-up'}} like"
                                                                    status="{{count($msg->likeuser)>=1 ? 'dislike' : 'like'}}"
                                                                    message="{{$msg->id}}"></i></a>
                                                        </div>
                                                        </span>
                                                    </div>
                                                </li>
                                            @endif


                                        @elseif($msg->type=='gif' ||  $msg->type=='gifTenor')

                                            @if($msg->user_id==Auth::user()->id)
                                                <li class="my-chat mb-4   text-end message{{$msg->id}}">
                                                    <div class="chat-hour">
                                                        <div class="icons">

                                                            {{--                                                            <a href="#"><i class="fas fa-reply"></i></a>--}}
                                                            <a style="cursor:pointer;" class=""><i
                                                                    class="fa fa-trash delete"
                                                                    message="{{$msg->id}}"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="chat-text chat-text_gif">
                                                        <span
                                                            class="orange">{{$msg->user->name}} : </span>
                                                        <img src="{{ $msg->type=='gifTenor' ? $msg->message :  asset('sticker/'.$msg->sticker->sticker.'')}}"
                                                             class="imgSticker" alt="">
                                                        <div class="chat-details">{{$msg->created_at}}</div>

                                                    </div>
                                                    <div class="chat-avatar">

                                                        <img src="{{asset('image/'.$msg->user->profile.'')}}"
                                                             alt="Retail Admin" class="imgCircle">

                                                        <!-- <div class="chat-name">Sam</div> -->
                                                    </div>
                                                </li>
                                            @else
                                                <li class="your-chat mb-3">
                                                    <div class="chat-avatar">

                                                        <img class="vistProfile" vist="{{$msg->user->id}}"
                                                             src="{{asset('image/'.$msg->user->profile.'')}}"
                                                             alt="Retail Admin">

                                                    </div>
                                                    <div class="chat-text chat-text_gif"><span
                                                            class="purple">{{$msg->user->name}} :</span>
                                                        <img src="{{ $msg->type=='gifTenor' ? $msg->message :  asset('sticker/'.$msg->sticker->sticker.'')}}"
                                                             class="imgSticker" alt="">

                                                        <div class="chat-details">
                                                            {{$msg->created_at}}
                                                        </div>
                                                    </div>


                                                    <div class="chat-hour">
                                                        <div class="icons ">
                                                            <a><i msgid="{{$msg->id}}" msguser="{{$msg->user_id}}"
                                                                  class="fa fa-flag reportmsg"></i></a>


                                                            <!-- <a href="#" class="ml-2"><i class="fas fa-reply"></i></a> -->
                                                            <a style="cursor: pointer" class="ml-2"><i
                                                                    class="far  {{count($msg->likeuser)>=1 ? 'fa-thumbs-down' : 'fa-thumbs-up'}} like"
                                                                    status="{{count($msg->likeuser)>=1 ? 'dislike' : 'like'}}"
                                                                    message="{{$msg->id}}"></i></a>
                                                        </div>
                                                        </span>
                                                    </div>
                                                </li>
                                            @endif


                                        @endif
                                    @endforeach


                                </ul>

                            </div>


                            <div class="modal fade" id="reportmsg"
                                 tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalCenterTitle"
                                 aria-hidden="true">
                                <div class="modal-dialog " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-dark">
                                            <h5 class="modal-title text-white"
                                                id="exampleModalLongTitle">Report
                                                Message</h5>
                                            <button type="button" class="close"
                                                    data-dismiss="modal"
                                                    aria-label="Close">
                                                                                <span class="text-white"
                                                                                      aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body bg-dark">
                                            <div class="col-md-12">

                                                <div class="container">
                                                    <h3 class="text-white">Reason</h3>
                                                    <div class="text-white">
                                                        <div class="from group">
                                                            <input checked type="radio"
                                                                   class="report"
                                                                   name="report"
                                                                   value="spam">
                                                            <label>Spam</label>
                                                        </div>
                                                        <div class="from group">
                                                            <input type="radio"
                                                                   class="report"
                                                                   name="report"
                                                                   value="abuse">
                                                            <label>Abuse</label>
                                                        </div>
                                                        <div class="from group">
                                                            <input type="radio"
                                                                   class="report"
                                                                   name="report"
                                                                   value="inappropriate">
                                                            <label>Inappropriate</label>
                                                        </div>
                                                        <div class="from group">
                                                            <input type="radio"
                                                                   name="report"
                                                                   value="other">
                                                            <label>Other</label>
                                                        </div>
                                                        <div class="from group">
                                                            <label>Comment</label>
                                                            <textarea rows="4" cols="4"
                                                                      name="comment"
                                                                      id="comment"
                                                                      placeholder="Enter Comment"
                                                                      class="form-control comment"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="hidden" id="msg_id"
                                                       value="">
                                                <input type="hidden" id="msg_user_id"
                                                       value="">
                                                <input type="hidden" id="user_rep_id"
                                                       value="{{Auth::user()->id}}">
                                                <center>
                                                    <button type="button" id="report"
                                                            class="btn btn-primary btn-sm col-4 mt-3 text-center">
                                                        Report
                                                    </button>

                                                </center>

                                            </div>
                                        </div>
                                        {{-- <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>


                            <div class="form-group mb-0 message_div px-3">
                                <div class="row">
                                    <div class="col-12 gif-tab">
                                        <span class="text-light mt-4" style="font-size: 17px">GIFs</span>
                                        {{--                                        <input type="text" class="form-control mt-2 git-input"--}}
                                        {{--                                               placeholder="Search GIFs">--}}

                                        <div class="row our-gifs mt-2 mb-2">


                                            <input type="hidden" value="{{isset($giftenor->next) ? $giftenor->next : null}}" id="next">
                                            @foreach($gifs as $gif)
                                                <div class="col-3 mt-2">
                                                    <img src="{{asset('sticker/'.$gif->sticker.'')}}"
                                                         gifid="{{$gif->id}}" type="admin" class="img-fluid gifupload"/>
                                                </div>
                                            @endforeach
                                            @foreach($giftenor->results as $gift)

                                                <div class="col-3 mt-2">
                                                    <img src="{{$gift->media[0]->gif->url}}" style="width: 100%;height: 150px"
                                                         gifid="{{$gift->media[0]->gif->url}}" type="tenor" class="img-fluid gifupload"/>
                                                </div>
                                            @endforeach





                                        </div>

                                    </div>
                                    <div class="col-12 d-flex message_icon py-3">
                                        <i class="far fa-file" id="ourgif">
                                            <span class="gif-icons">GIf</span>
                                        </i>
                                        <input type="text" placeholder="Type a Message" name="message"
                                               class="form-control ml-3 mr-3 message_input" id="text_msg">
                                        <button type="button" class="ml-3 btn_send"><i
                                                class="far fa-paper-plane"></i></button>
                                    </div>
                                </div>

                            </div>

                        </div>
                        {{--                        desktop div--}}
                        <div class="col-lg-4 col-12 bg-dark right_side">
                            <div class="w-100 bg-dark d-flex justify-content-between p-3">
                                <div class="d-flex">
                                    <div class="user-info">
                                        @if(isset($profile->profile))

                                            <img src="{{asset('image')}}/{{$profile->profile}}"
                                                 class="imgCircle myprofile"
                                                 style="width: 40px;height:40px;border-radius:50%"
                                                 alt="">
                                        @else
                                            <img src="{{asset('chat/image/782-gr-R8Mt30L6pg.png')}}"
                                                 class="imgCircle myprofile"
                                                 style="width: 40px;height:40px;border-radius:50%">
                                        @endif
                                        <div class="user-profile">
                                            <ul>
                                                <li><a href="#" data-toggle="modal" data-target="#editProfile"
                                                       id="profile"> Edit Profile</a></li>
                                                <li><a href="{{URL::to('/logout')}}"> Log Out</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div style="line-height: 2px;" class="text-light ml-2 pt-1">
                                        <p>{{$profile->name}}</p>
                                        <p>{{'@'}}{{$profile->username}}</p>
                                    </div>
                                </div>

                                <div class="d-flex  justify-content-end">
                                    <button class="btn3" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        <div class="dropdown-menu bg-dark drop2" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item text-light" href="#">Default</a>
                                            <a class="dropdown-item text-light" href="#">English</a>

                                        </div>
                                        <img src="{{asset('chat/image/flag-Stars-and-Stripes-May-1-1795.jpg')}}"
                                             width="20" height="20" class="rounded-circle" alt="">
                                    </button>

                                </div>
                            </div>


                            <div class="w-100 bg-dark3 d-flex justify-content-between p-2">
                                <div class="d-flex" style="align-items: center;width: 62%;">
                                    <img src="{{asset('radio')}}/{{$radio->image}}" width="50" height="50"
                                         class="rounded-circle" alt="">

                                    <div class="text-light ml-2 pt-2 w-100">
                                        <p>Radio</p>
                                        <marquee width="100%" direction="right">
                                            {{$radio->title}}
                                        </marquee>
                                    </div>
                                </div>

                                <div class="d-flex  justify-content-end ml-3" style="align-items: center;">
                                    <a href="#" class="text-light">
                                        <i class="fas fa-step-backward"></i>
                                    </a>
                                    <a href="#" class="ml-3 text-light">
                                        <i class="fas fa-play"></i>
                                        <i class="fas fa-pause "></i>
                                    </a>

                                    <a href="#" class="ml-3 text-light">
                                        <i class="fas fa-step-forward"></i>
                                    </a>
                                </div>
                            </div>


                            <div class="w-100">
                                <div class=" p-2">

                                    <div class="col-12">


                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link tablink" data-toggle="tab" href="#tabs-1" role="tab">Alert</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tablink onlinetab" data-toggle="tab" href="#tabs-2"
                                                   role="tab">Online Users</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link myprofile" data-toggle="tab" href="#" role="tab">Profile</a>
                                            </li>

                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tabs-1" role="tabpanel">
                                                <div class="row table-responsive text-center text-light"
                                                     style="height: 40vh">
                                                    @if(count($likedata)==0 && count($reportdata)==0)
                                                        <h3>0</h3>
                                                        <h3>Alerts</h3>
                                                    @endif
                                                    @foreach($likedata as $likedata)
                                                        <div class="col-12 text-center text-light alert_div pt-1 pb-1">
                                                            <div
                                                                class="w-100 bg-dark d-flex justify-content-between p-3">
                                                                <div class="d-flex">
                                                                    <div>
                                                                        <img
                                                                            src="{{asset('image/'.$likedata->user->profile)}}"
                                                                            width="40"
                                                                            class="rounded" alt=""></div>

                                                                    <div style="line-height: 2px;"
                                                                         class="text-light ml-2 pt-2 text-left ">
                                                                        <p>{{$likedata->user->name}}</p>
                                                                        <p>Liked your message</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @endforeach

                                                    @foreach($reportdata as $reportdata)
                                                        <div class="col-12 text-center text-light alert_div pt-1 pb-1">
                                                            <div
                                                                class="w-100 bg-dark d-flex justify-content-between p-3">
                                                                <div class="d-flex">
                                                                    <div>
                                                                        <img
                                                                            src="{{asset('image/'.$reportdata->user->profile)}}"
                                                                            width="40"
                                                                            class="rounded" alt=""></div>

                                                                    <div style="line-height: 2px;"
                                                                         class="text-light ml-2 pt-2 text-left ">
                                                                        <p>{{$reportdata->user->name}}</p>
                                                                        <p>Reported your message</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>

                                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                                <div class="row table-responsive text-center text-light"
                                                     style="height: 40vh">
                                                    @if(count($onlineusers)==0)
                                                        <h3>0</h3>
                                                        <h3>Alerts</h3>
                                                    @endif
                                                    @foreach($onlineusers as $onlineusers)
                                                        <div class="col-12 text-center text-light alert_div pt-1 pb-1">
                                                            <div
                                                                class="w-100 bg-dark d-flex justify-content-between p-3">
                                                                <div class="d-flex">
                                                                    <div>
                                                                        <img
                                                                            src="{{asset('image/'.$onlineusers->profile)}}"
                                                                            width="40"
                                                                            class="rounded" alt=""></div>

                                                                    <div style="line-height: 2px;"
                                                                         class="text-light ml-2 pt-2 text-left ">
                                                                        <p>{{$onlineusers->name}}</p>
                                                                        <p style="color: green">online</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="position-relative profile_div">


                                <div class="container-fluid  bg-dark2 text-center p-2 rounded-bottom">
                                    <div class="mb-3">
                                        @if(isset($profile->profile))

                                            <img src="{{asset('image')}}/{{$profile->profile}}"
                                                 class="rounded-circle img_circle" data-toggle="modal"
                                                 data-target="#editProfile" width="80" height="80" alt="">
                                        @else
                                            <img src="{{asset('chat/image/782-gr-R8Mt30L6pg.png')}}"
                                                 class="rounded-circle img_circle" data-toggle="modal"
                                                 data-target="#editProfile" alt="" width="80" height="80">
                                        @endif


                                    </div>


                                    <button data-toggle="modal" data-target="#editProfile"
                                            class="btn btn-success btn_gra">Edit Profile
                                    </button>


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
                                            <b>{{date('d-M-y',strtotime($profile->updated_at))}}</b><br>
                                            <p>Last Login</p>
                                        </div>
                                    </div>

                                </div>
                            <!-- <div class="Scroll_div">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 mt-2 bg-dark2 p-2 text-light">
                                                <h6>Profile link:</h6>
                                                <div class="left_border p-2">
                                                    <p>https://nycrhythm.net/chat/group/782/</p>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2 bg-dark2 p-2 text-light  ">
                                                <h6>Embed Code :</h6>
                                                <p class=" left_border p-2">
                                                    {{'<iframe width="411px" height="650px" allow="camera;microphone"
                                                              src="https://nycrhythm.net/chat/rehmanjqvps/" frameborder=0
                                                              allowfullscreen></iframe>'}}
                                </p>

                            </div>

                        </div>
                    </div>
                </div> -->

                            </div>

                            <div class="position-relative visit_div" style="display: none">
                                <div class="container-fluid vistProfile bg-dark2 text-center p-2 rounded-bottom">

                                </div>


                            </div>


                            <div class="w-100 text-center">

                                <button class="share-btn" text="{{url()->current()}}">Share</button>
                            </div>

                        </div>

                    </div>
                    <!-- Row end -->
                </div>

            </div>

        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->

</div>

@php
    // die();
@endphp
<input type="hidden" name="id" id="id" value="{{Auth::user()->id}}">
<div id="test_div" style="color: white"></div>


</body>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
        cluster: 'us3'
    });

    var channel = pusher.subscribe('chatRoom');
    channel.bind('chat', function (data) {
        var response = JSON.parse(JSON.stringify(data));
        var message = response['message'];

        var user = response['user'];
        var msgId = response['message']['id'];
        var userId = $('#id').val();
        $.ajax({
            url: '{{URL::to('user/getMSG')}}',
            type: 'GET',
            data: {'id': msgId},
            success: function (data) {


                if (user == userId) {
                    $('.chatContainerScroll').append(data);
                    $('.chat-container').scrollTop($('.chat-container')[0].scrollHeight);

                } else {
                    $('.chatContainerScroll').append(data);
                }

                //console.log(data);
            }
        });

    });
</script>
<script>
    $(document).ready(function () {


        $('.our-gifs').on('scroll', function() {
            if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {


                var next = $('#next').val();
                           $('#next').remove();
                $.ajax({
                    url: '{{URL::to('user/next/gif')}}',
                    type: 'GET',
                    data: {'next': next},
                    success: function (data) {
                        $('.our-gifs').append(data);
                    }
                });
               // alert('end reached');
            }
        })

        $('.chat-container').scrollTop($('.chat-container')[0].scrollHeight);

        $('.gif-tab').hide();
        $('#ourgif').click(function () {
            $('.gif-tab').toggle();
        });


        $(document).keypress(
            function (event) {

                if (event.which == '13') {
                    sendMsg();

                }
            });


        $('.myprofile').click(function () {
            $(".profile_div").show();
            $(".visit_div").hide();
            $(".tab-pane").removeClass('active');
            $(".tablink").removeClass('active');

        });


        // $('#mySidenav').close();


        $(".img_div").mouseover(function () {
            $('.img_circle').hide();


        });
        $(".img_div").mouseout(function () {
            $('.img_circle').show();
        });


        $(".tablink").click(function () {
            $(".profile_div").css('display', 'none');
            $(".visit_div").css('display', 'none');


        });
        $(".onlineuser").click(function () {
            $(".onlinetab").click();

        });
        $(".search_icon").click(function () {
            // alert("Hello");
            $(".search_div").toggleClass('d-none');


        });


        $('.btn_send').click(function () {
            sendMsg();
        });
        $('.input_search').change(function () {
            var text = $('.input_search').val();
            $.ajax({
                url: '{{URL::to('user/searchMSG')}}',
                type: 'POST',
                data: {'text': text},
                success: function (data) {
                    $('.chatContainerScroll').empty().append(data);
                    $('.chat-container').scrollTop($('.chat-container')[0].scrollHeight);

                }
            });
        });
        $('.clear_search').click(function () {
            $('.input_search').val('');
            $(".search_div").toggleClass('d-none');
            var text = '';
            $.ajax({
                url: '{{URL::to('user/searchMSG')}}',
                type: 'POST',
                data: {'text': text},
                success: function (data) {
                    $('.chatContainerScroll').empty().append(data);
                    $('.chat-container').scrollTop($('.chat-container')[0].scrollHeight);

                }
            });
        });

        function sendMsg() {
            $(".emojionearea-editor").focus();
            $("#text_msg").focus();
            var msg = $('#text_msg').val();
            $('#text_msg').val('');
            $('.emojionearea-editor').empty();
            $.ajax({
                url: '{{URL::to('user/sendMSG')}}',
                type: 'POST',
                data: {'message': msg},
                success: function (data) {
                    $('.chat-container').scrollTop($('.chat-container')[0].scrollHeight);
                    //console.log(data);
                    //   $('#test_div').empty().append(data);
                }
            });
        }

        $(document).on('click', '.delete', function () {


            var msgid = $(this).attr('message');

            $.ajax({
                url: '{{URL::to('user/deletemessage')}}',
                type: 'get',
                data: {'id': msgid},
                success: function (data) {


                    $('.message' + msgid).remove();
                }
            });


        });
        $('#report').click(function () {
            var report = $('input[name="report"]:checked').val();
            var comment = $('#comment').val();
            var msg_id = $('#msg_id').val();
            var msg_user_id = $('#msg_user_id').val();
            var user_rep_id = $('#user_rep_id').val();
            $.ajax({
                url: '{{URL::to('user/report')}}',
                type: 'get',
                data: {
                    'report': report,
                    'comment': comment,
                    'msg_id': msg_id,
                    'msg_user_id': msg_user_id,
                    'user_rep_id': user_rep_id
                },

                success: function (response) {
                    $('#reportmsg').modal('hide');

                }
            });

        });

        $(document).on('click', '.like', function () {


            var msgid = $(this).attr('message');
            var status = $(this).attr('status');
            var data = $(this);


            $.ajax({
                url: '{{URL::to('user/likemessage')}}',
                type: 'get',
                data: {'id': msgid, 'status': status},
                async: false,
                success: function (response) {

                    if (status == 'like') {
                        $(data).removeClass('fa-thumbs-up');
                        $(data).addClass('fa-thumbs-down');
                        $(data).attr('status', 'dislike');
                    } else {

                        $(data).addClass('fa-thumbs-up');
                        $(data).removeClass('fa-thumbs-down');
                        $(data).attr('status', 'like');
                    }


                }
            });


        });
        $(document).on('click', '.reportmsg', function () {
            var msgid = $(this).attr('msgid');
            var userid = $(this).attr('msguser');
            $('#msg_id').val(msgid);
            $('#msg_user_id').val(userid);

            $('#reportmsg').modal('show');

        });
        $(document).on('click', '.gifupload', function () {
            var stickerID = $(this).attr('gifid');
            var type = $(this).attr('type');

            sendGif(stickerID,type);


        });

        $(document).on('click', '.vistProfile', function () {
            var vistUserProfile = $(this).attr('vist');
            $.ajax({
                url: '{{URL::to('user/vistUserProfile')}}',
                type: 'GET',
                data: {'id': vistUserProfile},
                success: function (data) {
                    $('.profile_div').hide();
                    $('.visit_div').show();
                    $('.vistProfile').empty().append(data);

                }
            });
            // alert(vistUserProfile);
        });

        function sendGif(id,type) {
            $('.gif-tab').toggle();
            var msg = id;
            var type = type;
            $.ajax({
                url: '{{URL::to('user/sendGIF')}}',
                type: 'POST',
                data: {'message': msg,'type':type},
                success: function (data) {
                    $('.chat-container').scrollTop($('.chat-container')[0].scrollHeight);

                }
            });
        }

        //audio play and pause
        var obj = document.createElement('audio');
        $('.fa-pause').hide();
        $('.audio').hide();
        $('.fa-play , .fa-play2').click(function () {
            var audio = $('.audio').attr('audio');
            $('.fa-pause').show();

            $('.fa-play').hide();

            obj.src = audio;
            obj.play();
        });
        $('.fa-pause').click(function () {
            $('.fa-pause').hide();

            $('.fa-play').show();

            obj.pause();
        });
        $('.share-btn').click(function () {
            var text = $(this).attr('text');
            navigator.clipboard.writeText(text);

            swal("Site Link Copied Successfully", "", "success", {
                button: "Close",

            });


        });


    });

</script>
<script>
    function openNav() {

        document.getElementById("mySidenav").style.width = "320px";
    }

    function closeNav() {
        // document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenav").style.width = "0";


    }

    function setLighttheme() {
        $("body").addClass("light-theme");
    }

    function setdarktheme() {
        $("body").removeClass("light-theme");
    }


</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"--}}
{{--        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"--}}
{{--        crossorigin="anonymous"></script>--}}


</html>
