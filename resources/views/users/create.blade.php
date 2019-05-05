@extends('layouts.default')
@section('title', '创建用户')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>创建</h5>
    </div>
    <div class="panel-body">
      @include('shared._errors')

      <form method="POST" action="{{ route('users.store') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">名称：</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
          </div>

          <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>

          <div class="form-group">
            <label for="password_confirmation">确认密码：</label>
            <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
          </div>

          <button type="submit" class="btn btn-primary">确认创建</button>
      </form>
    </div>
  </div>
</div>
@stop