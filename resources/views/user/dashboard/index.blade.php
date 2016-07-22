@extends('user.layouts.base')

@section('style')
@endsection

@section('main')
  <a href="{{ user_url('account/create') }}" class="btn default blue-stripe btn-xs"><i class="fa fa-plus"></i>添加公众号</a>
  <div class="am-u-sm-12">
    <table class="am-table am-table-bd am-table-striped admin-content-table">
      <thead>
      <tr>
        <th>#</th>
        <th>名称</th>
        <th>类型</th>
        <th>添加时间</th>
        <th>操作</th>
      </tr>
      </thead>
      <tbody>
      @foreach($accounts as $key => $account)
        <tr>
          <td>{{ $key+1 }}</td>
          <td>{{ $account->name }}</td>
          <td>{{ $account->type }}</td>
          <td>{{ $account->created_at }}</td>
          <td>
            <a class="am-btn am-btn-primary am-btn-xs" href="{{ user_url('account/edit/'.$account->id) }}"><i class="fa fa-edit"></i>修改</a>
            <a class="am-btn am-btn-primary am-btn-xs" href="{{ user_url('account/interface/'.$account->id) }}"><i class="fa fa-link"></i>接口</a>
            <a class="am-btn am-btn-primary am-btn-xs" href="{{ user_url('account/manage/'.$account->id) }}"><i class="fa fa-cogs"></i>功能管理</a>
            <button class="am-btn am-btn-danger am-btn-xs am-btn-delete-confirm" data-link="{{ user_url('account/destroy/'.$account->id) }}"><i class="fa fa-trash-o"></i>删除</button>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection