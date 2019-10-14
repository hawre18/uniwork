@extends('index.v1.template.default')
@section('content')

    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="radio">
        <label><input type="radio" id='regular' name="optradio">زن</label>
    </div>
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
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="product-grid">
                                        <form method="post" action="{{ route('profils.store')}}">
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
                                            <table id="tableGroup" class="table table-responsive">
                                                <thead>ساخت پروفایل</thead>
                                                <tr>
                                                    <th>شماره دانشجویی</th>
                                                    <th>نام</th>
                                                    <th>نام خانوادگی</th>
                                                    <th>تاریخ تولد</th>
                                                    <th>کدپستی</th>
                                                    <th>شغل</th>
                                                    <th>تلفن</th>
                                                    <th>آدرس</th>
                                                    <th>استان</th>
                                                    <th>شهر</th>
                                                    <th>جنسیت</th>
                                                    <th>انجام عملیات</th>
                                                </tr>
                                                <tbody>
                                                <tr>
                                                    <td><input type="text" class="disabled" name="username" value="{{$user_id->username }}"></td>
                                                    <td><input type="text" name="first_name" value="{{$user_id->first_name }}"></td>
                                                    <td><label name="last_name">{{$user_id->last_name }}</label></td>
                                                    <td><input  type="text" name="birthday"  id="birthday" class="datepicker" value="{{ old('birthday') }}"  tabindex="1"  /></td>
                                                    <td><input  type="text" name="post_code" id="post_code" value="{{$user_id->post_code }}"></td>
                                                    <td><input  type="text" name="job"       id="job" value="{{$user_id->job }}"></td>
                                                    <td><input  type="text" name="tell"      id="tell" value="{{$user_id->tell }}"></td>
                                                    <td><input  type="text" name="addr"      id="addr" value="{{$user_id->addr }}"></td>
                                                    <td> <select class="form-control "       id="state_id" class="select-dropdown" name="state" tabindex="3">
                                                            <option selected disabled>انتخاب کنید</option>
                                                            @foreach($states as $state)
                                                                <option value="{{ $state->id }}" @if($state->id == old('$state_id')) selected @endif>{{substr($state->title, 0, 20)}}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td> <select class="form-control " class="select-dropdown" name="city" id="city"   tabindex="3">
                                                            <option selected disabled>انتخاب کنید</option>
                                                            @foreach($citys as $city)
                                                                <option value="{{ $city->id }}" @if($city->id == old('city_id')) selected @endif>{{substr($city->title, 0, 20)}}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-check-radio">
                                                       <label>
                                                         <input name="gender" type="radio" value="0" />
                                                           <span>زن</span>
                                                       </label>
                                                        </div>
                                                        <div class="form-check form-check-radio">
                                                            <label>
                                                         <input name="gender" type="radio" value="1" checked />
                                                           <span>مرد</span>
                                                       </label>
                                                        </div>
                                                    </td>
                                                    <td> <input tabindex="6" type="submit" name="submit" value="افزودن" class="btn btn-primary waves-effect"></td>
                                                </tr>
                                                </tbody>
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