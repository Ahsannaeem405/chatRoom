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
                        <h4>Clear Chat</h4>
                        <button class="btn btn-danger float-right"  onclick="return confirm('Are you sure you want to Clear chat?');">Clear Chat</button>
                    </div>
                    <div class="card-content p-3">


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
