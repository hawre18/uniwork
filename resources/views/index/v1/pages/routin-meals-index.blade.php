@extends('index.v1.template.default')
@section('content')
    <div class="row center">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 " style="position: absolute;right: 15%;top: 10%;left: 15%;">
            <div class="card">
                <div class="header">
                    <h2>
                        <strong>جزئیات</strong>وعده های غذایی</h2>
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
                    <a href="{{ route('routin-meals.create') }}"> رکورد جدید</a>
                    <i class="material-icons">add</i>
                </div>
                <div class="tableBody">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos ">
                            <thead>
                            <tr>
                                <th>شناسه</th>
                                <th>تاریخ شروع غذادهی</th>
                                <th>تاریخ پایان غذادهی</th>
                                <th>وعده غذایی</th>
                                <th>سالن غذاخوری</th>
                                <th>غذا</th>
                                <th>انجام عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($routin_meals as $row)

                                    <tr>
                                        <td class="table-img">{{ $loop->index + 1 }}</td>
                                        <td><a href="{{ route('routin-meals.show', $row->id) }}">{{ substr($row->start_date, 0, 20) }} </a></td>
                                        <td><a href="{{ route('routin-meals.show', $row->id) }}">{{ substr($row->end_date, 0, 20) }}</a></td>
                                        <td><a href="{{ route('routin-meals.show', $row->id) }}">{{ substr($row->meal_type->title, 0, 20) }}</a></td>
                                        <td><a href="{{ route('routin-meals.show', $row->id) }}">
                                                @foreach($row->foodLounges as $food_lounge)
                                                    {{ substr($food_lounge->title, 0, 20) }} -
                                                @endforeach
                                            </a>
                                        </td>
                                        <td><a href="{{ route('routin-meals.show', $row->id) }}">
                                                @foreach($row->foods as $food)
                                                    {{ substr($food->title, 0, 20) }} -
                                                @endforeach
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{action('RoutinMealController@edit',$row['id'])}}" class="btn tblActnBtn"><i class="material-icons">mode_edit</i></a>
                                            <a href="{{ route('routin-meals.delete', $row->id)}}" class="btn tblActnBtn"><i class="material-icons">mode_delete</i></a>
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