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
                                        <form method="post" action="{{ route('routin-meals.store')}}">
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
                                                    <th>شروع غذا دهی</th>
                                                    <th>پایان غذا دهی</th>
                                                    <th>وعده غذایی</th>
                                                    <th>سالن غذا خوری</th>
                                                    <th>غداها</th>
                                                    <th>عملیات</th>
                                                </tr>
                                                <tr>
                                                    <td><input id="start_date" name="start_date" value="{{ old('start_date') }}" type="datetime-local" tabindex="1"  /></td>
                                                    <td> <input id="end_date" name="end_date" value="{{ old('end_date') }}" type="datetime-local" tabindex="2"  /></td>
                                                    <td> <select class="form-control " class="select-dropdown" name="meal_type_id" id="meal_type"   tabindex="3">
                                                            <option selected disabled>انتخاب کنید</option>
                                                            @foreach($meal_types as $meal_type)
                                                                <option value="{{ $meal_type->id }}" @if($meal_type->id == old('meal_type_id')) selected @endif>{{substr($meal_type->title, 0, 20)}}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td> <select class="form-control " multiple name="food_lounges[]" id="food_lounge"   tabindex="4">
                                                            <option selected disabled>انتخاب کنید</option>
                                                            @foreach($food_lounges as $food_lounge)
                                                                <option value="{{ $food_lounge->id }}"
                                                                        {{ old('food_lounges') == $food_lounge->id ? 'selected': ''}}
                                                                >{{$food_lounge->title}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>  <select class="form-control select-dropdown input-sm" multiple name="foods[]" id="food"   tabindex="5">
                                                            <option selected disabled>انتخاب کنید</option>
                                                            @foreach($foods as $food)
                                                                <option value="{{ $food->id }}"
                                                                        {{ old('foods') == $food->id ? 'selected': ''}}
                                                                >{{$food->title}}
                                                                </option>
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