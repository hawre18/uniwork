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
                                        <form method="post" action="{{ route('users.store')}}">
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
                                                <thead>ایجاد حساب کاربری</thead>
                                                <tr>
                                                    <th>شناسه کاربری</th>
                                                    <th>رمزعبور</th>
                                                    <th>نام</th>
                                                    <th>نام خانوادگی</th>
                                                    <th>سمت</th>
                                                    <th>انجام عملیات</th>
                                                </tr>
                                                <tr>
                                                    <td><input id="username" name="username" value="{{ old('username') }}" type="text" tabindex="1"  /></td>
                                                    <td><input id="password" name="password" value="{{ old('password') }}" type="text" tabindex="1"  /></td>
                                                    <td><input id="first_name" name="first_name" value="{{ old('first_name') }}" type="text" tabindex="1"  /></td>
                                                    <td><input id="last_name" name="last_name" value="{{ old('last_name') }}" type="text" tabindex="1"  /></td>
                                                    <td> <select class="form-control select-dropdown"  name="role_id" id="role_user"   tabindex="3">
                                                            <option selected disabled>انتخاب کنید</option>
                                                            @foreach($role as $role_user)
                                                                <option value="{{ $role_user->id }}" @if($role_user->id == old('role_id')) selected @endif>{{substr($role_user->title, 0, 20)}}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td> <input tabindex="6" type="submit" name="submit" value="افزودن" class="btn btn-primary waves-effect"></td>
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