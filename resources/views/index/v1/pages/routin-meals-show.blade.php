@extends('index.v1.template.default')
@section('content')
    <div class="row center">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 " style="position: absolute;right: 15%;top: 10%;left: 15%;">
            <div class="card">
                <div class="header">
                    <h2>
                        <strong>جزئیات</strong>وعده های غذایی</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="new record">
                    <a href="{{ route('routin-meals.create') }}"> رکورد جدید</a>
                    <i class="material-icons">add</i>
                </div>
<!-- todo -->
                                    <input type="text" id="title" value="{{ $routin_meal->start_date }}"/> <br>
                                    <input type="text" id="title" value="{{ $routin_meal->end_date }}"/> <br>
                                    <input type="text" id="title" value="{{ $routin_meal->meal_type->title }}"/> <br>
                                    <input type="text" id="title" value="{{ $routin_meal->foodLounges[0]->title }}"/> <br>
                                    <input type="text" id="title" value="{{ $routin_meal->foods[0]->title }}"/> <br>
            </div>
        </div>
        <!-- #END# Task Info -->
        <!-- Browser Usage -->
        <!-- #END# Browser Usage -->
    </div>
@endsection
@section('custom_scripts')
@endsection