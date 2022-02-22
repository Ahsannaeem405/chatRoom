@extends('dashboard.layouts.main')
@section('users')
    active
@endsection
@section('css')



@endsection


@section('heading')
    Users  List
@endsection

@section('title')
Users
@endsection

@section('content')

    <main>
        <div class="content-body">
            <section id="column-selectors">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">

                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table table-striped dataex-html5-selectors">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>username</th>

                                                <th>Created Date</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($users as $user)

                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->username}}</td>
                                                    <td>{{$user->created_at}}</td>
                                                    <td>
                                                        <a onclick="return confirm('Are you sure you want to Remove?');"
                                                           href="{{url("admin/users/del/$user->id")}}"><i
                                                                style="color: red;font-size: 20px"
                                                                class="fa fa-trash p-2"></i></a>

                                                </tr>

                                            @endforeach


                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>


@endsection
