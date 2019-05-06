@extends('layouts.default')
@section('title', '登录')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>登录</h5>
    </div>
    <div class="panel-body">
      @include('shared._errors')

      <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">学号/教工号：</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
          </div>

          <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
            <p>（用户默认密码为123456）</a></p>
          </div>

          <div class="checkbox">
            <label><input type="checkbox" name="remember"> 记住我</label>
          </div>


          <button type="submit" class="btn btn-primary">登录</button>
      </form>

      <hr>

      <p><a href="{{ route('signup') }}">用户创建</a></p>
    </div>
  </div>
</div>
@stop