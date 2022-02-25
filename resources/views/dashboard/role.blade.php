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
                        <h4>User Role</h4>
                    </div>
                    <div class="card-content p-3">


                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>User Email</th>
                                        <th>User Role</th>

                                        <th>Action</th>



                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        <td>1</td>
                                        <td>demo@gmail.com</td>
                                        <td>Admin</td>


                                        <td>


                                            <a href="#"  class="btn btn-primary ml-1" data-toggle="modal" data-target="#exampleModal">Edit</a>
                                            <a href="#" class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete User?');">Delete</a>



                                        </td>
                                    </tr>




















                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>User Email</th>
                                        <th>User Role</th>

                                        <th>Action</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>


                    </div>
                </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{url('/admin/addb&a')}}" method="POST" enctype="multipart/form-data">
                    @csrf
              <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">


                        <div class="row p-3">

                           <div class="col-md-6 col-12 mt-2">
                               <label><h5>User Email</h5></label><br>
                               <input type="email" placeholder="Enter Email" class="form-control">
                           </div>
                           <div class="col-md-6 col-12 mt-2">
                            <label><h5>User Name</h5></label><br>
                            <input type="text" placeholder="Enter Name" class="form-control">
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label><h5>User Name</h5></label><br>
                           <select name="role" class="form-control" id="">
                            <option value="admin">Admin</option>
                           </select>
                        </div>



                        </div>


                </div>
                <div class="modal-footer">
                  {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                  <button type="submit" class="btn btn-primary">Update User</button>

                </div>
              </div>
            </form>
            </div>
          </div>




        <script>
            $('.dropify').dropify();
        </script>
<script>
    archiveFunction() {
        swal({
  title: "Are you sure?",
  text: "But you will still be able to retrieve this file.",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, archive it!",
  cancelButtonText: "No, cancel please!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    swal("Deleted!", "Your imaginary file has been archived.", "success");
  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
    }
</script>


            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </main>


@endsection