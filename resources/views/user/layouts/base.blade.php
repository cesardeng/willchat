<!doctype html>
<html class="no-js fixed-layout">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WillChat</title>
  <meta name="description" content="">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="{{ vendor('amazeui') }}/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="{{ vendor('amazeui') }}/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="{{ vendor('amazeui') }}/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="{{ css('user/useradmin.css') }}">
  <link rel="stylesheet" href="{{ css('user/custom.css') }}" />
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

@include('user.layouts.pageheader')

<div class="am-cf admin-main">
  <!-- sidebar start -->
  @include('user.layouts.pagesidebar')
  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>一些常用模块</small></div>
      </div>

      <div class="am-g">
        @yield('main')
      </div>

    </div>

    @include('user.layouts.pagefooter')
  </div>
  <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="{{ vendor('amazeui') }}/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{ vendor('amazeui') }}/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="{{ vendor('amazeui') }}/assets/js/amazeui.min.js"></script>
<script src="{{ vendor('amazeui') }}/assets/js/app.js"></script>
</body>
</html>