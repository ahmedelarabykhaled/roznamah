<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('admin/plugins/images/favicon.png')}} ">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{url('admin/bootstrap/dist/css/bootstrap.min.css')}} " rel="stylesheet">

    <!-- Menu CSS -->
    <link href="{{url('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}} " rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{url('admin//plugins/bower_components/toast-master/css/jquery.toast.css')}} " rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{url('admin/plugins/bower_components/morrisjs/morris.css')}} " rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{url('admin//plugins/bower_components/chartist-js/dist/chartist.min.css')}} " rel="stylesheet">
    <link href="{{url('admin//plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}} " rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{url('admin/css/animate.css')}} " rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" />
    <!-- Custom CSS -->
    <link href="{{url('admin/css/style.css')}} " rel="stylesheet">
    <!-- color CSS -->
    <link href="{{url('admin/css/colors/default.css')}} " id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="{{url('admin/day')}}">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon-->
                            <img src="{{url('admin/plugins/images/admin-logo.png')}} " alt="home" class="dark-logo" />
                            <!--This is light logo icon-->
                            <img src="{{url('admin/plugins/images/admin-logo-dark.png')}} " alt="home" class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text-->
                            <img src="{{url('admin/plugins/images/admin-text.png')}} " alt="home" class="dark-logo" />
                            <!--This is light logo text-->
                            <img src="{{url('admin/plugins/images/admin-text-dark.png')}} " alt="home" class="light-logo" />
                        </span> 
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light" href="javascript:void(0)"><i class="fa fa-bars fa-lg"></i></a>
                    </li>
                    <li>
                        <a href="{{ url('admin/logout') }} ">تسجيل خروج</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation" dir="rtl">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="{{url('admin/day')}}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{url('admin/day')}}" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>All Dates</a>
                    </li>
                    <li>
                        <a href="{{url('admin/category')}} " class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>All Categories</a>
                    </li>

                </ul>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title" dir="rtl">
                        <h4 class="page-title ">لوحه التحكم</h4>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box analytics-info">
                            @yield('content')
                        </div>
                    </div>
                <!--/.row -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{url('admin/plugins/bower_components/jquery/dist/jquery.min.js')}} "></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('admin/bootstrap/dist/js/bootstrap.min.js')}} "></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{url('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}} "></script>
    <!--slimscroll JavaScript -->
    <script src="{{url('admin/js/jquery.slimscroll.js')}} "></script>
    <!--Wave Effects -->
    <script src="{{url('admin/js/waves.js')}} "></script>
    <!--Counter js -->
    <script src="{{url('admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}} "></script>
    <script src="{{url('admin/plugins/bower_components/counterup/jquery.counterup.min.js')}} "></script>
    <!-- chartist chart -->
    <script src="{{url('admin/plugins/bower_components/chartist-js/dist/chartist.min.js')}} "></script>
    <script src="{{url('admin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}} "></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{url('admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}} "></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{url('admin/js/custom.min.js')}} "></script>
    <script src="{{url('admin/js/dashboard1.js')}} "></script>
    <script src="{{url('admin/plugins/bower_components/toast-master/js/jquery.toast.js')}} "></script>
    @stack('js')
</body>

</html>
