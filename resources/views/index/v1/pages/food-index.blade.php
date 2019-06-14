@extends('index.v1.template.default')
@section('content')
    <div class="row center">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 " style="position: absolute;right: 15%;top: 10%;left: 15%;">
            <div class="card">
                <div class="header">
                    <h2>
                        <strong>جزئیات</strong>غذاها</h2>
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
                    <a href="{{ route('foods.create') }}"> رکورد جدید</a>
                    <i class="material-icons">add</i>
                </div>
                <div class="tableBody">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos ">
                            <thead>
                            <tr>
                                <th>شناسه</th>
                                <th>نام غذا</th>
                                <th>قیمت</th>
                                <th>توضیحات</th>
                                <th>تاریخ ایجاد</th>
                                <th>تاریخ آخرین ویرایش</th>
                                <th>انجام عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($foods as $food)

                                    <tr>
                                        <td class="table-img">{{ $food->id }}</td>
                                        <td>{{ $food->title }}</td>
                                        <td>{{ $food->price }}</td>
                                        <td>{{ $food->description }}</td>
                                        <td>{{ $food->created_at }}</td>
                                        <td>{{ $food->updated_at}}</td>
                                        <td>
                                                <a href="{{ route('foods.edit', ['food'=> $food->id]) }}" class="btn tblActnBtn"><i class="material-icons">mode_edit</i></a>
                                                <a href="{{ route('foods.delete', $food->id)}}" class="btn tblActnBtn"><i class="material-icons">mode_delete</i></a>
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
    <script type="text/javascript">
    Command: toastr["success"]("Are you the six fingered man?")

    toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-full-width",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }
    </script>
@endsection