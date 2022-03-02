@extends('dashboard.layouts.main')

@section('dashboard')
active
@endsection

@section('css')

@endsection

@section('heading')
    Stickers
@endsection

@section('title')
    Stickers
@endsection

@section('content')



    <main>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row">
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal">
                            Add GIF
                          </button>
                    </div>
                </div>
                <div class="card mt-2">


                    <div class="card-header">
                        <h4>Stickers</h4>
                    </div>
                    <div class="card-content p-3">


                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>sticker</th>


                                        <th>Action</th>



                                    </tr>
                                </thead>
                                <tbody>


                                @foreach($sticker as $sticker)


                                    <tr>
                                        <td>{{$sticker->id}}</td>
                                        <td><img src="{{asset('sticker/'.$sticker->sticker)}}" style="width: 100px" alt=""></td>
                                        <td>


                                            <a href="#"  class="btn btn-primary ml-1" data-toggle="modal" data-target="#ipupdate{{$sticker->id}}">Edit</a>
                                            <a href="{{url('admin/delete/sticker/'.$sticker->id.'')}}" class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete GIF?');">Delete</a>



                                        </td>
                                    </tr>


                                    <div class="modal fade" id="ipupdate{{$sticker->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{url('/admin/update/sticker/'.$sticker->id.'')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">GIF</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">


                                                        <div class="row p-3">

                                                            <div class="col-12 text-center">
                                                                <img src="{{asset('sticker/'.$sticker->sticker)}}" style="width: 100px" alt="">
                                                                <h5>update GIF</h5><br>
                                                                <input type="file" name="gif"  required   class="form-control">
                                                            </div>


                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                                        <button type="submit" class="btn btn-primary">update IP/BAN</button>

                                                    </div>
                                                </div>
                                            </form>

                                @endforeach



                                </tbody>

                            </table>
                        </div>


                    </div>
                </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{url('/admin/store/sticker')}}" method="POST" enctype="multipart/form-data">
                    @csrf
              <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">GIF</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">


                        <div class="row p-3">

                           <div class="col-12">
                               <label><h5>Select GIF</h5></label><br>
                               <input type="file" name="gif"  required  class="form-control">
                           </div>


                        </div>


                </div>
                <div class="modal-footer">
                  {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                  <button type="submit" class="btn btn-primary">Store</button>

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
