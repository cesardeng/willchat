<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
{{--     <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ $user->avatar }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ $user->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div> --}}
    <!-- search form -->
{{--     <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form> --}}
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      {{-- <li class="header">MAIN NAVIGATION</li> --}}
      <li class="active treeview">
        <a href="#">
          <i class="icon-home"></i> <span>管理主页</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{ user_url('/') }}">
          <i class="icon-settings"></i> <span>基础设置</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"></i>自定义菜单</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="icon-speech"></i> <span>自动回复</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href={{ user_url('reply/index') }}"></i>文本回复</a></li>
          <li><a href={{ user_url('reply/index') }}"></i>图文回复</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="icon-users"></i> <span>粉丝管理</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"></i>粉丝列表</a></li>
          <li><a href="#"></i>粉丝分组</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="icon-frame"></i> <span>二维码</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"></i>临时二维码</a></li>
          <li><a href="#"></i>永久二维码</a></li>
          <li><a href="#"></i>卡券二维码</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>