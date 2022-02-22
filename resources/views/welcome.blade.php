<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Chat Room</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('gem/ore/grupo/global/favicon.png')}}"/>
    <link rel="apple-touch-icon" href="{{asset('gem/ore/grupo/global/icon192.png')}}"/>
    <link href="{{asset('riches/kit/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('gem/tone/gr-sign.css')}}" rel="stylesheet">

</head>
<body class="sign two bgone">

<section>
    <div>
        <div>
            <div class='box ltr'>
                <div class="logo">
{{--                    <img src="../gem/ore/grupo/global/logo.png"/>--}}
                    <h1>LOGO</h1>
                </div>
                <div class="errormsg">
                    <span></span>
                </div>
                <div class="swithlogin">
                    <ul>
                        <li class="login_type active" typ="login">Login</li>
                        <li class="login_type  lag" typ="gues">Login as Guest</li>
                    </ul>
                </div>
                <form autocomplete='off' class='gr_sign'>
                    <div class="elements">

                        <div class='register d-none'>
                            <label><i class="gi-user"></i>
                                <input type="text" autocomplete='grautocmp' name="fname" placeholder="Full Name"/>
                            </label>
                            <label><i class="gi-mail"></i>
                                <input type="email" autocomplete='grautocmp' name="email" placeholder="Email Address"/>
                            </label>
                            <label><i class="gi-globe"></i>
                                <input type="text" autocomplete='grautocmp' name="name" placeholder="Username"/>
                            </label>
                        </div>

                        <div class='loginasguest d-none'>
                            <label><i class="gi-user"></i>
                                <input type="text" autocomplete='grnickname' class="nickname" name="nickname"
                                       placeholder="Nickname"/>
                            </label>
                        </div>
                        <div class='login'>
                            <label><i class="gi-user"></i>
                                <input type="text" autocomplete='grautocmp' name="sign" placeholder="Email/Username"/>
                            </label>
                        </div>
                        <div class='global'>
                            <label><i class="gi-lock"></i>
                                <input type="password" class='gstdep' autocomplete='grautocmp' name="pass"
                                       placeholder="Password"/>
                            </label>
                        </div>
                    </div>


                    <div class="submitbtns">
                            <span class="submit global" form='.gr_sign' do='login' btn='Register'
                                  em='Invalid Input or Field Empty' gst=0>
                                Login                         </span>

                    </div>

                    <div class="switch" qn='Already have an account?' btn='Login'>
                        <div class="loginproviders">
                            <ul>
                                <li no="25"><img src="{{asset('gem/ore/grupo/loginprovider/25-gr-CNDDatRPuz.png')}}"/></li>
                                <li no="26"><img src="{{asset('gem/ore/grupo/loginprovider/26-gr-31alUcNhOX.jpg')}}"/></li>
                                <li no="229"><img src="{{asset('gem/ore/grupo/loginprovider/229-gr-lhrP8sssty.png')}}"/></li>
                            </ul>
                        </div>
                        <i>Don&#039;t have an account?</i>
                        <a href="{{url('register')}}">   <span>Create</span></a>
                    </div>


                </form>

                <form autocomplete='off' class='guest' style="display: none">
                    <div class="elements">



                        <div class='loginasguest '>
                            <label><i class="gi-user"></i>
                                <input type="text" autocomplete='grnickname' class="nickname" name="nickname"
                                       placeholder="Nickname"/>
                            </label>
                        </div>





                    </div>
                    <div class="submitbtns">
                            <span class="submit global" form='.gr_sign' do='login' btn='Register'
                                  em='Invalid Input or Field Empty' gst=0>
                                Login as guest                       </span>

                    </div>

                    <div class="switch" qn='Already have an account?' btn='Login'>
                        <div class="loginproviders">
                            <ul>
                                <li no="25"><img src="{{asset('gem/ore/grupo/loginprovider/25-gr-CNDDatRPuz.png')}}"/></li>
                                <li no="26"><img src="{{asset('gem/ore/grupo/loginprovider/26-gr-31alUcNhOX.jpg')}}"/></li>
                                <li no="229"><img src="{{asset('gem/ore/grupo/loginprovider/229-gr-lhrP8sssty.png')}}"/></li>
                            </ul>
                        </div>
                        <i>Don&#039;t have an account?</i>
                        <a href="{{url('register')}}">   <span>Create</span></a>
                    </div>




                </form>



            </div>
        </div>
    </div>
</section>


{{--<div class="signbg"></div>--}}
</body>
{{--<link href="../gem/tone/custom.css" rel="stylesheet">--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('gem/mine/gr-sign.js')}}"></script>
<script type="module">
    import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwainstall';

    const el = document.createElement('pwa-update');document.body.appendChild(el);
</script>

</html>
