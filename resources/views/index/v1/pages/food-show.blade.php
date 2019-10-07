@extends('index.v1.template.default')
@section('content')

    <div class="row ">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 " style="position: absolute;right: 15%;top: 10%;left: 15%;">
            <div class="card">
                <div class="header center">
                    <h2>
                        <strong >جزئیات</strong> غذا مورد نظر<a href="{{ route('foods.index') }}"><i class="material-icons md-36">home</i></a></h2>
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
                <label  id="title">غذا :{{ $food->title }}</label><br>
                <label  id="price">قیمت:{{ $food->price }}</label><br>
                <label  id="description">توضیحات:{{ $food->description }}</label><br>
            </div>
        </div>
        <!-- #END# Task Info -->
        <!-- Browser Usage -->
        <!-- #END# Browser Usage -->
    </div>
@endsection
@section('custom_scripts')
@endsection