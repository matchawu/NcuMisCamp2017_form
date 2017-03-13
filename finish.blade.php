@extends('layouts.layout')

@section('title', '2017資管營 | 報名完成')


@section('css')
<style type="text/css">
  .panel{
    text-align: center;
    font-size: 50px;
    background-color: rgba(0, 0, 0, 0.65);
    color:white;
  }
  img{
    height: 48%;
    width: 48%;
  }
  .btn{
    float: center;
  }
</style>

@endsection


@section('js')

@endsection

@section('content')

<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <img src="{{asset('img/mainpage/logow.png')}}">
      <p>謝謝你的報名!!!</p>
      <div class="btn">
        <a class="btn btn-default" href="" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">返回首頁</a>
      </div>
    </div>
    
  </div>
  
</div>
@endsection
