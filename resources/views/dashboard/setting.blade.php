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
                    {{-- <div class="col-lg-12">
                        <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal">
                            Add Images
                          </button>
                    </div> --}}
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
                        <div class="row">
                            <div class="col-12 mt-2 text-center">
                                <input name="file1" type="file"  class="dropify" data-default-file="{{asset('image/img_avatar.png')}}" data-height="100" required />
                                {{-- <img src="{{asset('image/img_avatar.png')}}" class="rounded-circle" width="100"  alt=""> --}}
                            </div>
                            <div class="col-md-6 col-12 mt-2">
                                <label for=""><b>Name</b></label><br>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-md-6 col-12 mt-2">
                                <label for=""><b>Email</b></label><br>
                                <input type="Email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-6 col-12 mt-2">
                                <label for=""><b>Old Password</b></label><br>
                                <input type="Password" class="form-control" placeholder="Enter Old Password">
                            </div>
                            <div class="col-md-6 col-12 mt-2">
                                <label for=""><b>New Password</b></label><br>
                                <input type="Password" class="form-control" placeholder="Enter New Password">
                            </div>
                            <div class="col-md-6 col-12 mt-2">
                                <label for=""><b>Confirm Password</b></label><br>
                                <input type="Password" class="form-control" placeholder="Enter Confirm Password">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary float-right">Update</button>
                            </div>
                        </div>

                        {{-- <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Radio Link</th>
                                        <th>Action</th>



                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        <td>1</td>
                                        <td>#</td>


                                        <td>


                                            <a href="#"  class="btn btn-primary ml-1" data-toggle="modal" data-target="#exampleModal">Edit</a>


                                        </td>
                                    </tr>




















                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Before Image</th>
                                        <th>After Image</th>
                                        <th>Action</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div> --}}


                    </div>
                </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{url('/admin/addb&a')}}" method="POST" enctype="multipart/form-data">
                    @csrf
              <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Radio Setting</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">


                        <div class="row p-3">

                           <div class="col-12">
                               <label><h5>Radio Link</h5></label><br>
                               <input type="text" placeholder="Enter Link" class="form-control">
                           </div>



                        </div>


                </div>
                <div class="modal-footer">
                  {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                  <button type="submit" class="btn btn-primary">Add Images</button>

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
