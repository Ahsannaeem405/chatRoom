@extends('dashboard.layouts.main')
@section('users')
    active
@endsection
@section('css')



@endsection


@section('heading')
    Social setting
@endsection

@section('title')
    Social setting
@endsection

@section('content')

    <main>
        <div class="content-body">
            <section id="column-selectors">
                <div class="row">

           <div class="card w-100">

               <div class="card-body">
                   <form action="{{url("admin/social/update")}}" method="post">
                       @csrf

               <div class="row">
                   <div class="col-lg-6 mb-2">

                       <lable>Google client Id</lable>
                       <input type="text" class="form-control" value="{{$social->googleClient}}" name="googleClient">

                   </div>


                   <div class="col-lg-6 mb-2">

                       <lable>Google secret Id</lable>
                       <input type="text" class="form-control" value="{{$social->googleSecret}}" name="googleSecret">

                   </div>


                   <div class="col-lg-6 mb-2">

                       <lable>Facebook client Id</lable>
                       <input type="text" class="form-control" value="{{$social->facebookClient}}" name="facebookClient">

                   </div>


                   <div class="col-lg-6 mb-2">

                       <lable>Facebook secret Id</lable>
                       <input type="text" class="form-control" value="{{$social->facebookSecret}}" name="facebookSecret">

                   </div>


                   <div class="col-lg-6 mb-2">

                       <lable>Twitter client Id</lable>
                       <input type="text" class="form-control" value="{{$social->twitterClient}}" name="twitterClient">

                   </div>


                   <div class="col-lg-6 mb-2">

                       <lable>Twitter secret Id</lable>
                       <input type="text" class="form-control" value="{{$social->twitterSecret}}" name="twitterSecret">

                   </div>

                   <div class="col-lg-12 text-center">
                       <button class="btn btn-primary">UPDATE</button>
                   </div>

               </div>
                   </form>
               </div>
                         </div>

                </div>
            </section>
        </div>
    </main>


@endsection
