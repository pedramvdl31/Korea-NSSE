<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Fantaplan Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    @yield('stylesheets')
    <script src="/assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <style type="text/css">
    .job-dump{
      background: #F2FFF2;
      z-index: 9999;
    }
    .navbar-default {
      background-image: -webkit-linear-gradient(top,#3c8dbc 0,#3c8dbc 100%);
      background-image: -o-linear-gradient(top,#3c8dbc 0,#3c8dbc 100%);
      background-image: -webkit-gradient(linear,left top,left bottom,from(#3c8dbc),to(#3c8dbc));
      background-image: linear-gradient(to bottom,#3c8dbc 0,#3c8dbc 100%);
    }
    .navbar-default .navbar-toggle .icon-bar {
      background-color: #FFF;
    }
    .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
      background-color: #2B2B2B;
    }
    .jumbotron{
        border-radius: 10px;
        padding-top: 30px;
        padding-left: 30px;
    } 
    .li-title{
        color: white;
        margin-left: 5px;
    }
    .modal-header {
        color: black !important;
    }
    .main-container-cf{
      padding-top: 70px;
      padding-bottom: 60px;
    }

    /* Extra Small Devices, Phones */ 
    @media only screen and (max-width : 480px) {
      .main-container-cf{
        padding-top: 150px;
      }
    }

    /* Custom, iPhone Retina */ 
    @media only screen and (max-width : 320px) {
      .main-container-cf{
        padding-top: 150px;
      }        
    }


  </style>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header" style="position:fixed;width:100%;">
        <!-- Logo -->
        <a href="/admins" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>AMS</b>CO</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>AMS</b>CO</span>

        </a>
        
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
              <!--               <li class="to-fullscreen-li"><a class="to-fullscreen"><i class="glyphicon glyphicon-resize-full"></i></a></li>
              <li class="to-normalscreen-li hide"><a class="to-normalscreen"><i class="glyphicon glyphicon-resize-small"></i></a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right" style="padding-right:20px">
              <!-- User Account: style can be found in dropdown.less -->
              <!--               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-dashboard"></i>&nbsp&nbspAccess Control List <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{!! route('roles_index') !!}">Roles</a></li>
                  <li><a href="{!! route('permissions_index') !!}">Permissions</a></li>
                  <li><a href="{!! route('permission_roles_index') !!}">Permision Role</a></li>
                </ul>
              </li> -->

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-desktop" aria-hidden="true"></i>&nbsp&nbsp현장시스템 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{!!route('qr_index_emp')!!}">바코드 관리</a></li><!-- qrcode -->

                  <li><a href="{!!route('check_sheet_view')!!}">Check Sheet</a></li>
                  <li><a href="{!!route('gen_qrcode_emp')!!}">Generate QR Code</a></li>
                </ul>
              </li>


              <!-- ORIGINAL MENU -->
<!--               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i>&nbsp&nbspUsers <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{!! route('users_index') !!}">View All</a></li>
                  <li><a href="{!! route('users_add') !!}">Add New</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp&nbspCompany <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{!! route('companies_view') !!}">View Company</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp&nbspResources <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{!! route('resources_edit') !!}">Manage Resources</a></li>
                </ul>
              </li> -->
<!--               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book" aria-hidden="true"></i>&nbsp&nbspCosts <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{!! route('costs_index') !!}"><i class="fa fa-file-excel-o" aria-hidden="true"></i><i class="fa fa-bar-chart" aria-hidden="true"></i> View</a></li>
                </ul>
              </li>
              <li><a href="{!!route('qr_index')!!}"><i class="fa fa-qrcode" aria-hidden="true"></i>&nbsp&nbspQR code </a></li> -->
              @if(Auth::check())
                <li><a href="/admins/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp&nbspLogout</a></li>
              @endif

              <!-- ORIGINAL MENU END -->

            </ul>
          </div>
        </nav>
      </header>

    <!-- jQuery 2.1.4 -->
      <div class="content-wrapper" style="margin-left: 0;">
        <div class="container-fluid main-container-cf" style="background-color:#FFF">
          @yield('content')
        </div>
      </div>
      <footer class="main-footer" style="margin: 0;position: fixed;
        bottom: 0;
        width: 100%;
        z-index:999999999999999999">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.1.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="#">Fantaplan</a>.</strong> All rights reserved.
      </footer>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    {!! View::make('layouts.partials.javascript_vars'); !!}
    
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    @yield('scripts')
  <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <!-- Sparkline -->
    <script src="/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/assets/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>

    <!-- AdminLTE App -->
    <script src="/assets/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/assets/dist/js/pages/dashboard.js"></script>
    <script src="/assets/js/layouts/admins.js"></script>
  </body>
</html>
