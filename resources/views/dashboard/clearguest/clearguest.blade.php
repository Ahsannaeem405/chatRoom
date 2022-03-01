@extends('dashboard.layouts.main')

@section('dashboard')
active
@endsection

@section('css')



@endsection


@section('heading')
    Clear Guest
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
                    </div>
                    <div class="card-content p-3">

                        @if($guestCount >0)
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="col-md-3">
                                <div class="my-4 px-2 text-center">
                                    <h4>Total Guest User {{$guestCount}}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">

                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteguest" >Delete Guest User ({{$guestCount}})</button>

                        </div>
                        @else
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="col-md-3">
                                <div class="my-4 ">
                                    <h4>No Guest User Available</h4>
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>

        <!-- Modal -->
        <div class="modal fade" id="deleteguest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">

              <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Clear Guest User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div>
                        <h5 class="text-center py-2">Are you sure you want to clear all Guest User - {{$guestCount}}</h5>
                      </div>

                </div>
                <div class="modal-footer">
                    <form action="{{url('/admin/delete_guest')}}" method="POST">
                        @csrf
                  {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                  <button type="submit" class="btn btn-danger">Clear Guest User</button>
                </form>
                </div>
              </div>

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
