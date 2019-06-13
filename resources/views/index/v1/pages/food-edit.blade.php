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
                                <a href="javascript:void(0);">فروشگاه</a>
                            </li>
                            <li class="breadcrumb-item active">محصولات</li>
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
                                        <form action="{{ route('foods.update',$foods->id)}}">
                                            @method('GET')
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
                                                <thead>اطلاعات غذا</thead>
                                                <tr>
                                                    <th>عنوان</th>
                                                    <th>قیمت</th>
                                                    <th>توضیحات</th>
                                                    <th>عملیات</th>
                                                </tr>
                                                @foreach($foods as $food)
                                                <tr>
                                                    <td><input type="text" name="title" placeholder="غذا" value={{$food->id}}></td>
                                                    <td><input type="number" name="price" placeholder="قیمت" value={{$food->title}}></td>
                                                    <td><input type="text" name="description" placeholder="توضیحات" value={{$food->price}}></td>
                                                    <td><input type="text" name="description" placeholder="توضیحات" value={{$food->description}}></td>
                                                    <td><input type="submit" name="submit" value="ویرایش" class="btn btn-primary waves-effect"></td>
                                                </tr>
                                                    @endforeach
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