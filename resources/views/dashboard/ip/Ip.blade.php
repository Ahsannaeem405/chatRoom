@extends('dashboard.layouts.main')

@section('dashboard')
active
@endsection

@section('css')

@endsection

@section('heading')
    IP/BAN
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
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal">
                            Add IP/BAN
                          </button>
                    </div>
                </div>
                <div class="card mt-2">


                    <div class="card-header">
                        <h4>IP/BAN</h4>
                    </div>
                    <div class="card-content p-3">


                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>IP</th>


                                        <th>Action</th>



                                    </tr>
                                </thead>
                                <tbody>


                                @foreach($ips as $ip)


                                    <tr>
                                        <td>1</td>
                                        <td>{{$ip->ip}}</td>
                                        <td>


                                            <a href="#"  class="btn btn-primary ml-1" data-toggle="modal" data-target="#ipupdate{{$ip->id}}">Edit</a>
                                            <a href="{{url('admin/del/ip/'.$ip->id.'')}}" class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete IP?');">Delete</a>



                                        </td>
                                    </tr>


                                    <div class="modal fade" id="ipupdate{{$ip->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{url('/admin/updateip/'.$ip->id.'')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">IP/BAN</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">


                                                        <div class="row p-3">

                                                            <div class="col-12">
                                                                <label><h5>IP/BAN</h5></label><br>
                                                                <input type="text" name="ip"  required placeholder="Enter IP/BAN" value="{{$ip->ip}}" class="form-control">
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
                <form action="{{url('/admin/addip')}}" method="POST" enctype="multipart/form-data">
                    @csrf
              <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">IP/BAN</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">


                        <div class="row p-3">

                           <div class="col-12">
                               <label><h5>IP/BAN</h5></label><br>
                               <input type="text" name="ip"  required placeholder="Enter IP/BAN" class="form-control">
                           </div>


                        </div>


                </div>
                <div class="modal-footer">
                  {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                  <button type="submit" class="btn btn-primary">Add IP/BAN</button>

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
