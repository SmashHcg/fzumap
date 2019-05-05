@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>福大校园地图 APP</h1>
    <p class="lead">
      你现在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training/5.5">福大校园地图APP</a> 的示例项目主页。
    </p>
    <p>
      开始你的福大之旅吧！
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在创建用户</a>
    </p>
  </div>
@stop