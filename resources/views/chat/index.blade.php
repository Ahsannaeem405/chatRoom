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
</head>

<body class="con-back p-0">

<div class="container-fluid p-0 " style="height: 100vh">
    
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="col-12">
            <div class="w-100 bg-dark d-flex justify-content-between p-3">
                <div class="d-flex">
                    <img src="{{asset('chat/image/avatar.jpg')}}" width="40" class="rounded-circle"
                         alt="">
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
                <div class="d-flex" style="align-items: center">
                    <img src="{{asset('chat/image/782-gr-R8Mt30L6pg.png')}}" width="50" height="50"
                         class="rounded-circle" alt="">

                    <div class="text-light ml-2 pt-2">
                        <p>Radio</p>
                        <marquee width="80%" direction="right">
                            This is a sample scrolling text that has scrolls texts to right.
                        </marquee>
                    </div>
                </div>

                <div class="d-flex  justify-content-end" style="align-items: center;">
                    <a href="#" class="text-light"><i class="fas fa-step-backward"></i></a>
                    <a href="#" class="ml-3 text-light"><i class="fas fa-play"></i></a>
                    <a href="#" class="ml-3 text-light"><i class="fas fa-step-forward"></i></a>
                </div>
            </div>


            <div class="w-100">
                <div class="row p-2">

                    <div class="col-12">


                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link tablink" data-toggle="tab" href="#tabs-1" role="tab">Alert</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link tablink" data-toggle="tab" href="#tabs-2" role="tab">Member</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tablink" data-toggle="tab" href="#tabs-3" role="tab">Petitions</a>
                            </li> -->
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane" id="tabs-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-12 text-center text-light alert_div pt-5 pb-5">
                                        <h3>0</h3>
                                        <h3>Alerts</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="w-100 bg-dark d-flex justify-content-between p-3">
                                    <div class="d-flex">
                                        <img src="image/avatar.jpg" width="40" class="rounded" alt="">

                                        <div style="line-height: 2px;" class="text-light ml-2 pt-2">
                                            <p>Danny</p>
                                            <p>Admin</p>
                                        </div>
                                    </div>

                                    <div class="d-flex  justify-content-end text-light member_hov">
                                        <div class="button_div d-flex">
                                            <button class="btn_1">View</button>
                                            <button class="btn_2">Chat</button>

                                        </div>

                                    </div>
                                </div>

                                <div class="w-100 bg-dark d-flex justify-content-between p-3">
                                    <div class="d-flex">
                                        <img src="{{asset('chat/image/avatar.jpg')}}" width="40"
                                             class="rounded" alt="">

                                        <div style="line-height: 2px;" class="text-light ml-2 pt-2">
                                            <p>Danny</p>
                                            <p>Admin</p>
                                        </div>
                                    </div>

                                    <div class="d-flex  justify-content-end text-light member_hov">
                                        <div class="button_div d-flex">
                                            <button class="btn_1">View</button>
                                            <button class="btn_2">Chat</button>

                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="row">
                                    <div class="col-12 text-center text-light alert_div pt-5 pb-5">
                                        <h3>0</h3>
                                        <h3>Petitions</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-relative profile_div">
                <div class="container-fluid bg-dark2 text-center p-2 rounded-bottom">
                    <div class="mb-3">
                        <img src="{{asset('chat/image/782-gr-R8Mt30L6pg.png')}}"
                             class="rounded-circle img_circle" alt="">
                    </div>


                    <button class="btn btn-success btn_gra">Edit Profile</button>
                    <div class="d-flex text-light pt-4 justify-content-center"
                         style="background-color: #3a3a3b;margin-top: -10px">
                        <div class="border_right  p-2">
                            <b>119</b><br>
                            <p>Likes</p>
                        </div>
                        <div class="border_right  p-2">
                            <b>0</b><br>
                            <p>Report</p>
                        </div>
                        <div class="p-2">
                            <b>21-FEB-22</b><br>
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
            <div class="w-100 text-center">
                <button class="share-btn" style="margin-top:2rem">Share</button>
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
                            <div class="col-12 p-0">
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/Kl9zXkIIkgg"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                <div class="w-100 bg-dark div1 p-2">
                                    <div class="">
                                        <div class="col-12">
                                            
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="col-12 d-flex pl-3 member_div justify-content-between">
                                            <div class="d-flex">
                                                <span style="font-size:28px;cursor:pointer;color: white;" class="collape" onclick="openNav()">&#9776;</span>
                                                <!-- <img src="{{asset('chat/image/782-gr-R8Mt30L6pg.png')}}" width="30"
                                                     class="rounded mx-2" alt="">
                                                <p class="pl-2 justify-content-end mb-0">{{$members->count()}}
                                                    Members</p> -->
                                            </div>

                                            <h5 class="mb-0 ml-4 mt-4 tab-play"><span><i class="fa fa-caret-up" aria-hidden="true"></i></span> Tap play</h5>
                                            <div>
                                                <i class="fa fa-search mr-2 search_icon"></i>
                                                <button class="button_dots" id="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"><i class="fa fa-ellipsis-h"></i></button>
                                                <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item text-light" href="#">Online Users</a>
                                                    <a class="dropdown-item text-light" href="#">Profile</a>
                                                    <a class="dropdown-item text-light" href="#">Radio</a>
                                                    <a class="dropdown-item text-light" href="#">Chat Options</a>
                                                    <a class="dropdown-item text-light" href="#">Light Mode</a>
                                                    <a class="dropdown-item text-light" href="#">Dark Mode</a>
                                                    <a class="dropdown-item text-light" href="#">Delete Chat</a>
                                                    <a class="dropdown-item text-light" href="#">Messages</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1 search_div d-none">
                                            <form action="#" method="post">
                                                <input type="text" name="search" placeholder="Search"
                                                       class="form-control input_search">
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
                                                    Joined
                                                    the Group Chat ({{$msg->created_at}})
                                                </div>

                                            </li>


                                        @else

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
                                                        <span class="orange">{{$msg->user->name}} : </span>{{$msg->message}} 
                                                        <div class="chat-details">{{$msg->created_at}}</div>   
                                                            
                                                    </div>
                                                    <div class="chat-avatar">
                                                        <img
                                                            src="{{asset('upload/profile/'.$msg->user->profile.'')}}"
                                                            alt="Retail Admin">
                                                        <!-- <div class="chat-name">Sam</div> -->
                                                    </div>
                                                </li>
                                            @else
                                                <li class="your-chat mb-3">
                                                    <div class="chat-avatar">
                                                        <img
                                                            src="{{asset('upload/profile/'.$msg->user->profile.'')}}"
                                                            alt="Retail Admin">
                                                        <!-- <div class="chat-name">Russell</div> -->
                                                    </div>
                                                    <div class="chat-text"><span
                                                            class="purple">{{$msg->user->name}} :</span> {{$msg->message}}
                                                            <div class="chat-details">
                                                            {{$msg->created_at}}
                                                            </div>
                                                    </div>
                                                    <div class="chat-hour">
                                                        <div class="icons ">
                                                            <a href="#"><i class="fa fa-flag"></i></a>
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
                            <div class="form-group mb-0 message_div p-3">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-12 d-flex message_icon">

                                            <i class="far fa-file "></i><i class="far fa-smile ml-3"></i>
                                            <input type="text" placeholder="Type a Message" name="message"
                                                   class="form-control ml-3 mr-3 message_input" id="text_msg">

                                            <button type="button" class="ml-3 btn_send"><i
                                                    class="far fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{--                        desktop div--}}
                        <div class="col-lg-4 col-12 bg-dark right_side">
                            <div class="w-100 bg-dark d-flex justify-content-between p-3">
                                <div class="d-flex">
                                    <div class="user-info">
                                        <img src="{{asset('chat/image/avatar.jpg')}}" width="40" class="rounded-circle"
                                         alt="">
                                         <div class="user-profile">
                                                <ul>
                                                    <li> <a href="#"> Edit Profile</a></li>
                                                    <li> <a href="{{URL::to('/logout')}}"> Log Out</a></li>
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
                                <div class="d-flex" style="align-items: center">
                                    <img src="{{asset('chat/image/782-gr-R8Mt30L6pg.png')}}" width="50" height="50"
                                         class="rounded-circle" alt="">

                                    <div class="text-light ml-2 pt-2">
                                        <p>Radio</p>
                                        <marquee width="80%" direction="right">
                                            This is a sample scrolling text that has scrolls texts to right.
                                        </marquee>
                                    </div>
                                </div>

                                <div class="d-flex  justify-content-end" style="align-items: center;">
                                    <a href="#" class="text-light"><i class="fas fa-step-backward"></i></a>
                                    <a href="#" class="ml-3 text-light"><i class="fas fa-play"></i></a>
                                    <a href="#" class="ml-3 text-light"><i class="fas fa-step-forward"></i></a>
                                </div>
                            </div>


                            <div class="w-100">
                                <div class=" p-2">

                                    <div class="col-12">


                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link tablink" data-toggle="tab" href="#tabs-4" role="tab">Alert</a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a class="nav-link tablink" data-toggle="tab" href="#tabs-5" role="tab">Member</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tablink" data-toggle="tab" href="#tabs-6" role="tab">Petitions</a>
                                            </li> -->
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-12 text-center text-light alert_div pt-5 pb-5">
                                                        <h3>0</h3>
                                                        <h3>Alerts</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tabs-5" role="tabpanel">
                                                <div class="w-100 bg-dark d-flex justify-content-between p-3">
                                                    <div class="d-flex">
                                                        <img src="image/avatar.jpg" width="40" class="rounded" alt="">

                                                        <div style="line-height: 2px;" class="text-light ml-2 pt-2">
                                                            <p>Danny</p>
                                                            <p>Admin</p>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex  justify-content-end text-light member_hov">
                                                        <div class="button_div d-flex">
                                                            <button class="btn_1">View</button>
                                                            <button class="btn_2">Chat</button>

                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="w-100 bg-dark d-flex justify-content-between p-3">
                                                    <div class="d-flex">
                                                        <img src="{{asset('chat/image/avatar.jpg')}}" width="40"
                                                             class="rounded" alt="">

                                                        <div style="line-height: 2px;" class="text-light ml-2 pt-2">
                                                            <p>Danny</p>
                                                            <p>Admin</p>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex  justify-content-end text-light member_hov">
                                                        <div class="button_div d-flex">
                                                            <button class="btn_1">View</button>
                                                            <button class="btn_2">Chat</button>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane" id="tabs-6" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-12 text-center text-light alert_div pt-5 pb-5">
                                                        <h3>0</h3>
                                                        <h3>Petitions</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="position-relative profile_div">


                                <div class="container-fluid bg-dark2 text-center p-2 rounded-bottom">
                                    <div class="mb-3">
                                        <img src="{{asset('chat/image/782-gr-R8Mt30L6pg.png')}}"
                                             class="rounded-circle img_circle" alt="">
                                    </div>


                                    <button class="btn btn-success btn_gra">Edit Profile</button>
                                    <div class="d-flex text-light pt-4 justify-content-center"
                                         style="background-color: #3a3a3b;margin-top: -10px">
                                        <div class="border_right  p-2">
                                            <b>{{$like}}</b><br>
                                            <p>Likes</p>
                                        </div>
                                        <div class="border_right  p-2">
                                            <b>0</b><br>
                                            <p>Report</p>
                                        </div>
                                        <div class="p-2">
                                            <b>21-FEB-22</b><br>
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
                            <div class="w-100 text-center">
                                <button class="share-btn">Share</button>
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

<div id="test_div" style="color: white"></div>


</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
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
    });
</script>
<script>
    $(document).ready(function () {
        $('.chat-container').scrollTop($('.chat-container')[0].scrollHeight);
        // $('#mySidenav').close();
        $('#mySidenav').css('width', '0');


        $(".img_div").mouseover(function () {
            $('.img_circle').hide();


        });
        $(".img_div").mouseout(function () {
            $('.img_circle').show();
        });


        $(".tablink").click(function () {
            $(".profile_div").css('display', 'none');


        });
        $(".search_icon").click(function () {
            // alert("Hello");
            $(".search_div").toggleClass('d-none');


        });


        $('.btn_send').click(function () {


            var msg = $('#text_msg').val();
            $('#text_msg').val('');
            $.ajax({
                url: '{{URL::to('user/sendMSG')}}',
                type: 'POST',
                data: {'message': msg},
                success: function (data) {
                    $('.chat-container').scrollTop($('.chat-container')[0].scrollHeight);
                    //   $('#test_div').empty().append(data);
                }
            });


        });
        $('.delete').click(function () {


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


        $('.like').click(function () {


            var msgid = $(this).attr('message');
            var status = $(this).attr('status');
            var data = $(this);



            $.ajax({
                url: '{{URL::to('user/likemessage')}}',
                type: 'get',
                data: {'id': msgid,'status':status},
                async:false,
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
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"--}}
{{--        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"--}}
{{--        crossorigin="anonymous"></script>--}}


</html>
