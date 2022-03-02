
@extends('auth.layout.main')

@section('content')
    <body class="sign two bgone">
    <section>
        <div>
            <div>
                <div class='box ltr'>
                    <div class="logo">
                        {{--                    <img src="../gem/ore/grupo/global/logo.png"/>--}}
                        <img src="{{asset('header')}}/{{$header->h_image}}" class="img-fluid img-responsive" style="width: 100%;height: 114px; "/>

                    </div>
                    <div class="errormsg">
                        <span></span>
                    </div>

                    <form autocomplete='off' method="post" class='gr_sign' >
                        @csrf
                        <div class="elements">

                            <div class='register'>
                                <label><i class="gi-user"></i>
                                    <input type="text" value="{{old('name')}}"    name="name" placeholder="Full Name"/>
                                </label>
                                @if($errors->has('name'))

                                    <span style="color: red">
                                        <strong>{{$errors->first('name')}}</strong>
                                    </span>
                                @endif
                                <label><i class="gi-mail"></i>
                                    <input type="email"  value="{{old('email')}}" name="email" placeholder="Email Address"/>
                                </label>
                                @if($errors->has('email'))

                                    <span style="color: red">
                                        <strong>{{$errors->first('email')}}</strong>
                                    </span>
                                @endif
                                <label><i class="gi-globe"></i>
                                    <input type="text"  value="{{old('username')}}" name="username" placeholder="Username"/>
                                </label>

                                @if($errors->has('username'))

                                    <span style="color: red">
                                        <strong>{{$errors->first('username')}}</strong>
                                    </span>
                                @endif

                            </div>


                            <div class='global'>
                                <label><i class="gi-lock"></i>
                                    <input type="password" class='gstdep'   name="password"
                                           placeholder="Password"/>
                                </label>
                                @if($errors->has('password'))

                                    <span style="color: red">
                                        <strong>{{$errors->first('password')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="submitbtns">
                            <button type="submit" class="btn btn-primary global submit w-100">Register</button>


                        </div>

                        <div class="switch" qn='Already have an account?' btn='Login'>
                            <div class="loginproviders">
                                <ul>
                                    <li no="25"><a href="{{ url('auth/facebook') }}"><img src="{{asset('gem/ore/grupo/loginprovider/25-gr-CNDDatRPuz.png')}}"/></a></li>
                                    <li no="26"><a href="{{ url('auth/google') }}"><img src="{{asset('gem/ore/grupo/loginprovider/26-gr-31alUcNhOX.jpg')}}"/></a></li>
                                    <li no="229"><img src="{{asset('gem/ore/grupo/loginprovider/229-gr-lhrP8sssty.png')}}"/></li>
                                </ul>
                            </div>
                            <i>Already have an account?</i>
                            <a href="{{url('login')}}">   <span>Login</span></a>
                        </div>


                    </form>





                </div>
            </div>
        </div>
    </section>


    {{--<div class="signbg"></div>--}}
    </body>
@endsection



