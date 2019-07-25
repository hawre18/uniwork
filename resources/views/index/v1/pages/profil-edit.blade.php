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
                                        <form method="post" action="{{ route('users.update', $user->id)}}">
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
                                                <thead>اطلاعات غذا</thead>
                                                <tr>
                                                    <th>نام کاربری</th>
                                                    <th>کلمه عبور</th>
                                                    <th>سمت</th>
                                                    <th>نام</th>
                                                    <th> نام خانوادگی</th>
                                                    <th>عملیات</th>
                                                </tr>
                                                <tr>
                                                    <td><input id="username" name="username" value="{{ old('firstname') ?? $user->username }}" type="text" tabindex="1"  /></td>
                                                    <td><input id="password" name="password" value="{{ old('password') ?? $user->password }}" type="text" tabindex="1"  /></td>
                                                    <td> <select class="form-control " class="select-dropdown" name="role" id="role"   tabindex="3">
                                                            <option selected disabled>انتخاب کنید</option>
                                                            @foreach($roles as $row)
                                                                <option value="{{ $row->id }}" @if($row->id == $user->role->id) selected @endif>{{substr($row->title, 0, 20)}}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td> <input id="first_name" name="first_name" value="{{ old('first_name') ?? $user->first_name }}" type="text" tabindex="2"  /></td>
                                                    <td> <input id="last_name" name="last_name" value="{{ old('last_name') ?? $user->last_name }}" type="text" tabindex="2"  /></td>
                                                    <td> <input tabindex="6" type="submit" name="submit" value="ویرایش" ></td>
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