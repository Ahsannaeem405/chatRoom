@extends('dashboard.layouts.main')

@section('dashboard')
active
@endsection

@section('css')



@endsection


@section('heading')
    Radio Setting
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


                    <div class="card-header">
                        <h4>Radio Setting</h4>
                    </div>
                    <div class="card-content p-3">


                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Radio</th>
                                        <th>Action</th>



                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        <td>1</td>
                                        <td><audio src="{{asset('radio/'.$radio->radio.'')}}" controls></audio></td>


                                        <td>


                                            <a href="#"  class="btn btn-primary ml-1" data-toggle="modal" data-target="#exampleModal">Edit</a>


                                        </td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>


                    </div>
                </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{url('admin/radio/update')}}" method="post" enctype="multipart/form-data">
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
                               <label><h5>Update Radio </h5></label><br>
                               <input type="file" name="radio" class="form-control">
                           </div>



                        </div>


                </div>
                <div class="modal-footer">
                  {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                  <button type="submit" class="btn btn-primary">Update</button>

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
