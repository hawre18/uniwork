@extends('index.v1.template.default')
@section('content')

    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">محصولات</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="#">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="javascript:void(0);">سلف</a>
                            </li>
                            <li class="breadcrumb-item active">ویرایش اطلاعات سالن غذاخوری</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Line Chart -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-md col-sm">
                                    <div class="product-grid">
                                        <form method="post" action="{{ route('food-lounges.update', $food_lounge->id)}}">
                                            <input type="hidden" name="_method" value="put" />
                                            @csrf
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <table>
                                                <thead>اطلاعات سالن</thead>
                                                <tr>
                                                    <th>شناسه</th>
                                                    <th>نام سالن</th>
                                                    <th>توضیحات</th>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="title" placeholder="عنوان" value="{{ $food_lounge->title }}" ></td>
                                                    <td><input type="text" name="description" placeholder="توضیحات" value="{{ $food_lounge->description }}" ></td>
                                                    <td><input type="submit" name="submit" value="ویرایش" class="btn btn-primary waves-effect"></td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Line Chart -->
            </div>
        </div>
    </section>

@endsection