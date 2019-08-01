@extends('index.v1.template.default')
@section('content')

    <div class="row ">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 " style="position: absolute;right: 15%;top: 10%;left: 15%;">
            <div class="card">
                <div class="header center">
                    <h2>
                        <strong >جزئیات</strong>وعده های غذایی<a href="{{ route('routin-meals.create') }}"><i class="material-icons md-36">add_circle_outline</i></a></h2>
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
                <label  id="start_date">تاریخ شروع غذا دهی:<br>{{ $routin_meal->start_date }}</label> <br>
                <label  id="end_date">تاریخ شروع غذا دهی:<br>{{ $routin_meal->end_date }}</label> <br>
                <label  id="meal_type">وعده غذایی:<br>{{ $routin_meal->meal_type->title }}</label> <br>
                <label  id="food_lounge" >سالن های توزیع غذا: <br>
                    @foreach($routin_meal->foodLounges as $food_lounge)
                        {{ $food_lounge->title }} -
                    @endforeach</label> <br>
                <label  id="food" >غذاها: <br>
                    @foreach($routin_meal->foods as $food)
                        {{$food->title}} -
                    @endforeach
                </label>
            </div>
        </div>
        <!-- #END# Task Info -->
        <!-- Browser Usage -->
        <!-- #END# Browser Usage -->
    </div>
@endsection
@section('custom_scripts')
@endsection