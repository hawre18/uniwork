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
                                            <table>
                                                <thead>اطلاعات غذا</thead>
                                                <tr>
                                                    <th>شروع غذا دهی</th>
                                                    <th>پایان غذا دهی</th>
                                                    <th>وعده غذایی</th>
                                                    <th>سالن غذا خوری</th>
                                                    <th>غداها</th>
                                                    <th>غداها</th>
                                                    <th>غداها</th>
                                                    <th>عملیات</th>
                                                </tr>
                                                <tr>
                                                   <td><label  id="username">{{$user_id->username }}</label></td>
                                                   <td><label  id="first_name">{{$user_id->first_name }}</label></td>
                                                   <td><label  id="last_name">{{$user_id->last_name }}</label></td>
                                                   <td><form class="form-horizontal">
                                                           <div class="form-group">
                                                               <div class="col-sm-offset-2 col-sm-10">
                                                                   <label class="file-upload btn btn-primary">
                                                                       Browse for file ... <input type="file" />
                                                                   </label>
                                                               </div>
                                                           </div>
                                                       </form></td>
                                                    <td><input id="postcode" name="postcode" value="{{ old('postcode') }}" type="text" tabindex="1"  /></td>
                                                    <td><div class="radio">
                                                            <label><input type="radio" name="optradio" checked>Option 1</label>
                                                        </div></td>
                                                    <td><input id="last_name" name="last_name" value="{{ old('last_name') }}" type="text" tabindex="1"  /></td>
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