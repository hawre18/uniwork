@extends('index.v1.template.default')
@section('content')
    <div class="row center">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 " style="position: absolute;right: 15%;top: 10%;left: 15%;">
            <div class="card">
                <div class="header">
                    <h2>
                        <strong>لیست </strong>پروفایل ها</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="new record">
                    <a href="{{ route('profils.create') }}"> رکورد جدید</a>
                    <i class="material-icons">add</i>
                </div>
                <div class="tableBody">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos ">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>عنوان وعده غذایی</th>
                                <th>عنوان وعده غذایی</th>
                                <th>عنوان وعده غذایی</th>
                                <th>عنوان وعده غذایی</th>
                                <th>عنوان وعده غذایی</th>
                                <th>عنوان وعده غذایی</th>
                                <th>عنوان وعده غذایی</th>
                                <th>عنوان وعده غذایی</th>
                                <th>عنوان وعده غذایی</th>
                                <th>انجام عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($profils as $row)
                                <tr>
                                    <td><a href="{{ route('profils.show', $row->user['id']) }}">{{ $loop->index + 1 }}</a></td>
                                    <td><a href="{{ route('profils.show', $row->user['id']) }}">{{ substr($row->username, 0, 20) }} </a></td>
                                    <td><a href="{{ route('profils.show', $row->user_id) }}">{{ substr($row->first_name, 0, 20) }} </a></td>
                                    <td><a href="{{ route('profils.show', $row->user_id) }}">{{ substr($row->last_name, 0, 20) }} </a></td>
                                    <td><a href="{{ route('profils.show', $row->user_id) }}">{{ substr($row->img_user, 0, 20) }} </a></td>
                                    <td><a href="{{ route('profils.show', $row->user_id) }}">{{ substr($row->post_code, 0, 20) }} </a></td>
                                    <td><a href="{{ route('profils.show', $row->user_id) }}">{{ substr($row->birthday, 0, 20) }} </a></td>
                                    <td><a href="{{ route('profils.show', $row->user_id) }}">{{ substr($row->gender, 0, 20) }} </a></td>
                                    <td><a href="{{ route('profils.show', $row->user_id) }}">{{ substr($row->job, 0, 20) }} </a></td>
                                    <td><a href="{{ route('profils.show', $row->user_id) }}">{{ substr($row->addr, 0, 20) }} </a></td>
                                    <td><a href="{{ route('profils.show', $row->user_id) }}">{{ substr($row->tell, 0, 20) }} </a></td>
                                    <td><a href="{{ route('profils.show', $row->user_id) }}">{{ substr($row->state_type['title'], 0, 20) }} </a></td>
                                    <td><a href="{{ route('profils.show', $row->user_id) }}">{{ substr($row->city_type['title'], 0, 20) }} </a></td>
                                    <td>
                                        <a href="{{action('MealController@edit',$row['user_id'])}}" class="btn tblActnBtn"><i class="material-icons">mode_edit</i></a>
                                        <a href="{{ route('meals.delete', $row->user_id)}}" class="btn tblActnBtn"><i class="material-icons">mode_delete</i></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Task Info -->
        <!-- Browser Usage -->
        <!-- #END# Browser Usage -->
    </div>
@endsection
@section('custom_scripts')
@endsection