@extends('index.v1.template.default')
@section('content')

    <div class="row ">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 " style="position: absolute;right: 15%;top: 10%;left: 15%;">
            <div class="card">
                <div class="header center">
                    <h2>
                        <strong >جزئیات</strong>وعده های غذایی<a href="{{ route('majors.create') }}"><i class="material-icons md-36">add_circle_outline</i></a></h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                        </li>
                    </ul>
                </div>
                <br>
                <label  id="username">نام کاربری:<br>{{ $user->username }}</label> <br>
                <label  id="password">کلمه عبور<br>{{ $user->password }}</label> <br>
                <label  id="role">نام:<br>{{ $user->first_name }}</label> <br>
                <label  id="role">نام خانوادگی:<br>{{ $user->last_name }}</label> <br>
                <label  id="role">سمت (جایگاه):<br>{{ $user->role['title'] }}</label> <br>
            </div>
        </div>
        <!-- #END# Task Info -->
        <!-- Browser Usage -->
        <!-- #END# Browser Usage -->
    </div>
@endsection
@section('custom_scripts')
@endsection