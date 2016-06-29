@extends('layout.master')
@section('title', 'login page')
@section('cssFiles')
 <link rel="stylesheet" href="assets/login.css">


@if (count($errors)>0)
  <div class="alert alert-danger">
   @foreach ($errors->all() as $error)
         {{ $error }}<br>        
    @endforeach
  </div>
@endif


<div class="testbox">
     <h1>Login</h1>
      
    {!! Form::open(array('url' => 'test/auth')) !!}
    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email','',array('class' =>'form-control','id'=>"email","placeholder"=>'email address')) !!}
        
    </div>
    <div class="form-group">
        {!! Form::label('password') !!}
        {!! Form::password('password',array('class' =>'form-control')) !!}
    </div>
     
    {!! Form::submit('login',array('class'=>'btn btn-primary','name'=>'login')) !!}
    {!! Form::submit('register',array('class'=>'btn btn-primary','name'=>'register')) !!}<br><br>
    {!! Form::close() !!}
</div>
@endsection
