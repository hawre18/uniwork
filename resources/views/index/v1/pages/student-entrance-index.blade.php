@extends('index.v1.template.default')
@section('content')
    <div class="row center">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 " style="position: absolute;right: 15%;top: 10%;left: 15%;">
            <div class="card">
                <div class="header">
                    <h2>
                        <strong>لیست </strong>ورودی ها</h2>
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
                    <a href="{{ route('studententrances.create') }}"> رکورد جدید</a>
                    <i class="material-icons">add</i>
                </div>
                <div class="tableBody">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos ">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>عنوان</th>
                                <th>انجام عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($student_entrance as $row)
                                <tr>
                                    <td><a href="{{ route('studententrances.show', $row->id) }}">{{ $loop->index + 1 }}</a></td>
                                    <td><a href="{{ route('studententrances.show', $row->id) }}">{{ substr($row->title, 0, 20) }} </a></td>
                                    <td>
                                        <a href="{{action('StudentEntranceController@edit',$row['id'])}}" class="btn tblActnBtn"><i class="material-icons">mode_edit</i></a>
                                        <a href="{{ route('studententrances.delete', $row->id)}}" class="btn tblActnBtn"><i class="material-icons">mode_delete</i></a>
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