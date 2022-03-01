@extends('dashboard.layouts.main')

@section('dashboard')
active
@endsection

@section('css')



@endsection


@section('heading')
    Dashboard
@endsection

@section('title')
    Chat Room
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
@section('content')

    <main>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row">
                  
                </div>
                <div class="card mt-2">
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                    @endif
                    @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{session()->get('error')}}
                    </div>
                    @endif

                    <div class="card-header">
                        <h4>Setting</h4>

                    </div>
                    <div class="card-content p-3">
                        <form action="{{url('updateProfile')}}/{{$user->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                            <div class="col-12 mt-2 text-center">
                                <input name="profile" type="file"  class="dropify" data-default-file="{{asset('image')}}/{{$user->profile}}" data-height="100"  />
                                {{-- <img src="{{asset('image/img_avatar.png')}}" class="rounded-circle" width="100"  alt=""> --}}
                            </div>
                            <div class="col-md-6 col-12 mt-2">
                                <label for=""><b>Name</b></label><br>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-md-6 col-12 mt-2">
                                <label for=""><b>Username</b></label><br>
                                <input type="text" name="username" value="{{$user->name}}" class="form-control" placeholder="Username">
                            </div>
                            <div class="col-md-6 col-12 mt-2">
                                <label for=""><b>Email</b></label><br>
                                <input type="Email" name="email" value="{{$user->email}}" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-6 col-12 mt-2">
                                <label for=""><b>Old Password</b></label><br>
                                <input type="Password" name="c_password" class="form-control @error('c_password') is-invalid @enderror" placeholder="Enter Old Password">
                                @error('c_password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                
                            </div>
                            <div class="col-md-6 col-12 mt-2">
                                <label for=""><b>New Password</b></label><br>
                                <input type="Password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" placeholder="Enter New Password">
                                @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-12 mt-2">
                                <label for=""><b>Confirm Password</b></label><br>
                                <input type="Password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="Enter Confirm Password">
                                @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-center mt-3">
                                <button type="submit" class="btn btn-primary btn-block col-3">Update</button>
                            </div>
                        </div>

                    </form>

                    </div>
                </div>


        <script>
            $('.dropify').dropify();
        </script>



            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </main>


@endsection
