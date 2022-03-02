@extends('auth.layout.main')

@section('content')
    <body class="sign two bgone">

    <section>
        <div>
            <div>
                <div class='box ltr'>
                    <div class="logo">
                   <img src="{{asset('header')}}/{{$header->h_image}}" class="img-fluid img-responsive" style="width: 100%;height: 114px; "/>
                       
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
                    <form method="post" class='gr_sign' action="{{url('login')}}">
                        @csrf
                        <div class="elements">


                            <div class='login'>
                                <label><i class="gi-user"></i>
                                    <input type="text" name="email" placeholder="Email"/>
                                </label>

                                @if($errors->has('email'))

                                    <span style="color: red">
                                        <strong>{{$errors->first('email')}}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class='global'>
                                <label><i class="gi-lock"></i>
                                    <input type="password" class='gstdep' autocomplete='grautocmp' name="password"
                                           placeholder="Password"/>
                                </label>
                            </div>
                        </div>


                        <div class="submitbtns">
                            <button type="submit" class="btn btn-primary global submit w-100">Login</button>


                        </div>

                        <div class="switch" qn='Already have an account?' btn='Login'>
                            <div class="loginproviders">
                                <ul>
                                    <li no="25"><a href="{{ url('auth/facebook') }}"><img src="{{asset('gem/ore/grupo/loginprovider/25-gr-CNDDatRPuz.png')}}"/></a></li>
                                    <li no="26"><a href="{{ url('auth/google') }}"><img src="{{asset('gem/ore/grupo/loginprovider/26-gr-31alUcNhOX.jpg')}}"/></a></li>
                                    <li no="229"><img src="{{asset('gem/ore/grupo/loginprovider/229-gr-lhrP8sssty.png')}}"/></li>
                                </ul>
                            </div>
                            <i>Don&#039;t have an account?</i>
                            <a href="{{url('register')}}">   <span>Create</span></a>
                        </div>


                    </form>

                    <form method="post" action="{{url('guestLogin')}}" class='guest' style="display: none">
                        @csrf
                        <div class="elements">
                            <div class='loginasguest '>
                                <label><i class="gi-user"></i>
                                    <input type="text" autocomplete='grnickname' value="{{old('username')}}" class="nickname" name="username"
                                           placeholder="username"/>
                                </label>
                                @if($errors->has('username'))

                                    <span style="color: red">
                                        <strong>{{$errors->first('username')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="submitbtns">
                            <button type="submit" class="btn btn-primary global submit w-100">Login as guest</button>
                            

                        </div>

                        <div class="switch" qn='Already have an account?' btn='Login'>
                            <div class="loginproviders">
                                <ul>
                                    <li no="25"><a href="{{ url('auth/facebook') }}"><img src="{{asset('gem/ore/grupo/loginprovider/25-gr-CNDDatRPuz.png')}}"/></a></li>
                                    <li no="26"><a href="{{ url('auth/google') }}"><img src="{{asset('gem/ore/grupo/loginprovider/26-gr-31alUcNhOX.jpg')}}"/></a></li>
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
@endsection


