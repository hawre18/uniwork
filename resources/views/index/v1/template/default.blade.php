<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>دانشگاه شمسی پور</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/index/v1/css/app.min.css') }}">
    <link rel="icon" type="image/x-icon"   href="{{ asset('assets/index/v1/images/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/index/v1/js/bundles/materialize-rtl/materialize-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/index/v1/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/index/v1/css/styles/all-themes.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/index/v1/css/persian-datepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/index/v1/css/file-upload.css') }}">

</head>
<body class="light menu_dark theme-black logo-white submenu-closed rtl">
    @yield('content')

    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
                   aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/index/v1/images/logo.png') }}" alt="" />
                    <span class="logo-name">دانشگاه شهید شمسی پور</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-right">
                    <li>
                        <a href="javascript:void(0);" class="sidemenu-collapse">
                            <i class="material-icons">reorder</i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                    <!-- #END# Full Screen Button -->
                    <!-- #START# Notifications-->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="far fa-bell"></i>
                            <span class="label-count bg-orange"></span>
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="header">اطلاعیه ها</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="table-img msg-user">
                                                <img src="{{ asset('assets/index/v1/images/user/user1.jpg')}}" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">ادمین</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 14 دقیقه پیش
                                                </span>
                                                <span class="menu-desc">لطفا ایمیل خود را چک کنید.</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">مشاهده تمام اطلاعیه ها</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications-->
                    <li class="dropdown user_profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img src="{{ asset('assets/index/v1/images/user.jpg')}}" width="32" height="32" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">person</i>پروفایل
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">feedback</i>بازخورد
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">help</i>راهنما
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">power_settings_new</i>خروج
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right">
                        <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src={{ asset('assets/index/v1/images/usrbig.jpg')}}" class="img-circle user-img-circle" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name">امید میرزائی</div>
                            <div class="profile-usertitle-job ">مدیر </div>
                        </div>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>خانه</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="#">داشبورد</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-mail-bulk"></i>
                            <span>ایمیل</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">صندوق ورودی</a>
                            </li>
                            <li>
                                <a href="#">نوشتن</a>
                            </li>
                            <li>
                                <a href="#">خواندن ایمیل</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fab fa-google-play"></i>
                            <span>برنامه ها</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">لیست تماس</a>
                            </li>
                            <li>
                                <a href="#">گرید مخاطب</a>
                            </li>
                            <li>
                                <a href="#">پشتیبانی</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-shopping-cart"></i>
                            <span>آشپزخانه</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">غذاها</a>
                            </li>
                            <li>
                                <a href="#">جزئیات غذاها</a>
                            </li>
                            <li>
                                <a href="#">لیست غذاها</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-table"></i>
                            <span>گزارش گیری ها</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">رزرو های سالن دانشجویان</a>
                            </li>
                            <li>
                                <a href="#">رزروهای سالن کارکنان و اساتید</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="far fa-file-alt"></i>
                            <span>کاربران</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">مشاهده</a>
                            </li>
                            <li>
                                <a href="#">ثبت</a>
                            </li>
                            <li>
                                <a href="#">ویرایش</a>
                            </li>
                            <li>
                                <a href="#">حدف</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside><!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation">
                    <a href="#skins" data-toggle="tab" class="active">پوسته ها</a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                    <div class="demo-skin">
                        <div class="rightSetting">
                            <div class="rightSetting">
                                <p>رنگ منو نوار کناری</p>
                                <button type="button" class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">روشن</button>
                                <button type="button" class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">تاریک</button>
                            </div>
                            <div class="rightSetting">
                                <p>پوسته ها</p>
                                <ul class="demo-choose-skin choose-theme list-unstyled">
                                    <li data-theme="black" class="actived">
                                        <div class="black-theme"></div>
                                    </li>
                                    <li data-theme="white">
                                        <div class="white-theme white-theme-border"></div>
                                    </li>
                                    <li data-theme="purple">
                                        <div class="purple-theme"></div>
                                    </li>
                                    <li data-theme="blue">
                                        <div class="blue-theme"></div>
                                    </li>
                                    <li data-theme="cyan">
                                        <div class="cyan-theme"></div>
                                    </li>
                                    <li data-theme="green">
                                        <div class="green-theme"></div>
                                    </li>
                                    <li data-theme="orange">
                                        <div class="orange-theme"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </div>
    <script src="{{ asset('assets/index/v1/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/index/v1/js/admin.js') }}"></script>
    <script src="{{ asset('assets/index/v1/js/persian-date.min.js') }}"></script>
    <script src="{{ asset('assets/index/v1/js/persian-datepicker.js') }}"></script>
    <script src="{{ asset('assets/index/v1/js/file-upload.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".datepicker").pDatepicker();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.file-upload').file_upload();
        });
    </script>
        @yield('custom_scripts')
</body>
</html>