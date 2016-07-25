<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ $metaTitle or 'WillChat' }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ vendor('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link href="http://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <!-- Ionicons -->
  <link href="http://cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ vendor('bower_components/AdminLTE') }}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ vendor('bower_components/AdminLTE') }}/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ vendor('bower_components/AdminLTE') }}/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ vendor('bower_components/AdminLTE') }}/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ vendor('bower_components/AdminLTE') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ vendor('bower_components/AdminLTE') }}/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ vendor('bower_components/AdminLTE') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ vendor('bower_components/AdminLTE') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  {{-- BEGIN MAINHEADER --}}
  @include('user.layouts.pageheader')
  {{-- END MAINHEADER --}}

  {{-- BEGIN SIDEBAR --}}
  @include('user.layouts.pagesidebar')
  {{-- END SIDEBAR --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
          @yield('main')
        </div>
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- BEGIN FOOTER --}}
  @include('user.layouts.pagefooter')
  {{-- END FOOTER --}}
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://cdn.bootcss.com/jqueryui/1.12.0/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ vendor('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="http://cdn.bootcss.com/raphael/2.2.1/raphael.min.js"></script>
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdn.bootcss.com/moment.js/2.14.1/moment.min.js"></script>
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ vendor('bower_components/AdminLTE') }}/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ vendor('bower_components/AdminLTE') }}/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ vendor('bower_components/AdminLTE') }}/dist/js/pages/dashboard.js"></script>
</body>
</html>
