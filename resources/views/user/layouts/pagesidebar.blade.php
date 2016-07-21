<div class="admin-sidebar am-offcanvas" id="sidebar">
  <div class="am-offcanvas-bar admin-offcanvas-bar">
    <ul class="am-list admin-sidebar-list">
      <li>
        <a href="{{ user_url('/') }}">
          <span class="am-icon-home"></span> 用户中心
        </a>
      <li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}">
          <span class="am-icon-file"></span> 基础设置
          <span class="am-icon-angle-right am-fr am-margin-right"></span>
        </a>
        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
          <li><a href="{{ user_url('') }}" class="am-cf">个人资料</a></li>
        </ul>
      </li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}">
          <span class="am-icon-file"></span> 自动回复
          <span class="am-icon-angle-right am-fr am-margin-right"></span>
        </a>
        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
          <li><a href="{{ user_url('') }}" class="am-cf">文本回复</a></li>
          <li><a href="{{ user_url('') }}" class="am-cf">图文回复</a></li>
          <li><a href="{{ user_url('') }}" class="am-cf">关注回复</a></li>
          <li><a href="{{ user_url('') }}" class="am-cf">默认回复</a></li>
        </ul>
      </li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}">
          <span class="am-icon-file"></span> 粉丝管理
          <span class="am-icon-angle-right am-fr am-margin-right"></span>
        </a>
        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
          <li><a href="{{ user_url('') }}" class="am-cf">粉丝列表</a></li>
          <li><a href="{{ user_url('') }}" class="am-cf">粉丝分组</a></li>
        </ul>
      </li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}">
          <span class="am-icon-file"></span> 高级群发
          <span class="am-icon-angle-right am-fr am-margin-right"></span>
        </a>
        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
          <li><a href="{{ user_url('') }}" class="am-cf">文本群发</a></li>
          <li><a href="{{ user_url('') }}" class="am-cf">图文群发</a></li>
        </ul>
      </li>
      <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}">
          <span class="am-icon-file"></span> 二维码
          <span class="am-icon-angle-right am-fr am-margin-right"></span>
        </a>
        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
          <li><a href="{{ user_url('') }}" class="am-cf">永久二维码</a></li>
          <li><a href="{{ user_url('') }}" class="am-cf">临时二维码</a></li>
          <li><a href="{{ user_url('') }}" class="am-cf">卡券二维码</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>