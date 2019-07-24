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
                                        <form method="post" action="{{ route('citys.store')}}">
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
                                                <thead>رشته تحصیلی</thead>
                                                <tr>
                                                    <th>شهر</th>
                                                    <th>استان</th>
                                                    <th>عملیات</th>
                                                </tr>
                                                <tr>
                                                    <td><input id="title" class="" name="title" value="{{ old('title') }}" type="text" tabindex="1"  /></td>
                                                    <td> <select class="form-control " class="select-dropdown" name="state_id" id="state_id"   tabindex="3">
                                                            <option selected disabled>انتخاب کنید</option>
                                                            @foreach($states as $state)
                                                                <option value="{{ $state->id }}" @if($state->id == old('$state')) selected @endif>{{substr($state->title, 0, 20)}}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td> <input tabindex="6" type="submit" name="submit" value="افزودن" ></td>
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