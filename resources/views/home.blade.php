<doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>خانه</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

</head>
<body style="direction: rtl;">

<div class="container">
    <h2 style="direction: rtl;text-align: center;">اتوماسیون تغذیه دانشکده شهیدشمسی پور</h2>
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">صفحه اصلی</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">اطلاعات مالی دانشجو</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">رزرو غذا</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="home" class="container tab-pane active">
            <br>
            <h3 style="direction: rtl; text-align: right;">صفحه اصلی</h3>

        </div>
        <div id="menu1" class="container tab-pane fade">
            <br>
            <h3 style="direction: rtl; text-align: right;">اطلاعات مالی دانشجو</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div id="menu2" class="container tab-pane fade">
            <br>
            <h3 style="direction: rtl; text-align: right;">رزرو غذا</h3>
            <form dir="rtl">
                <select  class="" name=”week” style="background: #999;float: right;margin-right: 20%;width: 20%;color: #fff;margin-top: -3%;">
                    <option value=”date_1” >هفته جاری </option>
                    <option value=”date_1” >هفته بعد </option>
                    <option value=”date_1” >دو هفته بعد </option>
                    <option value=”date_1” >سه هفته بعد </option>
                </select>
                <label style="margin-right: 45%;margin-top: -3%;float: right;width: 15%;">از تاریخ</label>
                <label style="margin-right: 65%;margin-top: -3%;float: right;width: 15%;">تا تاریخ</label>
                <table class="table table-striped">

                    <thead>
                    <tr>
                        <th>روز</th>
                        <th>صبحانه</th>
                        <th>نهار</th>
                        <th>شام</th>
                    </tr>
                    </thead>
                    @foreach($tbl_food as $food)
                        @endforeach
                    @foreach($tbl_day as $days)
                        {
                        <tr>
                            <td>{{$days->title}}</td>
                            <td>{{$food->title}}</td>
                            <td>{{$food->title}}</td>
                            <td>{{$food->title}}</td>
                        </tr>
                        }
                    @endforeach


                </table>
                <p> </p>
                <input name="pay" type="submit" value="پرداخت نهایی" class="btn btn-success"style="float: right;">
                <input name="afzayesh" type="button" value="افزایش اعتبار" class="btn btn-success"style="float: right;margin-right: 10px ;">

                <h3 style="direction: rtl; text-align: right; margin-top: 13%;">غذاهای رزرو شده</h3>
                <table class="table table-striped" style="margin-top: 1%;">

                    <thead>
                    <tr>
                        <th>روز</th>
                        <th>صبحانه</th>
                        <th>نهار</th>
                        <th>شام</th>
                    </tr>
                    </thead>
                    <?php
                    echo '<tbody>';
                    $day[0] = "شنبه";
                    $day[1] = "یک شنبه";
                    $day[2] = "دوشنبه";
                    $day[3] = "سه شنبه";
                    $day[4] = "چهار شنبه";

                    ?>

                   @foreach($tbl_food as $foods)
                       {
                        $Books = array ( {{$foods->title}} ) ;
                       }
                   @endforeach



                </table>
                <input name="tagirat" type="submit" value="ثبت تغییرات" class="btn btn-success"style="float: right;">
            </form>
            <label style="direction: rtl;text-align: right;float: right;margin-right: 60%;">اعتبار شما:</label>
        </div>
    </div>
</div>

</body>
</html>

