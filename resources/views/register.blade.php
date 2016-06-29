@extends('layout.master')
@section('title', 'register page')
    
<h1>Register</h1>
@section('content')
<div class="signup-form">
    {!! Form::open(array('url' => 'registered')) !!}
    <div class="form-group">
        {!! Form::label('Name') !!}
        {!! Form::text('name','',array('class' =>'form-control','id'=>"email","placeholder"=>'enter your name')) !!}
    </div>
     <div class="form-group">
        {!! Form::label('Age') !!}
        {!! Form::text('age','',array('class' =>'form-control')) !!}
    </div>
     <div class="form-group">
        {!! Form::label('Gender') !!}<br>
       {!! Form::radio('male','',array('class' =>'form-control')) !!} {!! Form::label('Male') !!}
        {!! Form::radio('female','',array('class' =>'form-control')) !!}{!! Form::label('Female') !!}
    </div>
     <div class="form-group">
        {!! Form::label('Address') !!}
        {!! Form::text('address','',array('class' =>'form-control')) !!}
    </div>
     <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email','',array('class' =>'form-control','id'=>"email","placeholder"=>'email address')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password') !!}
        {!! Form::password('password',array('class' =>'form-control')) !!}
    </div>

    {!! Form::submit('register',array('class'=>'btn btn-primary','name'=>'register')) !!}
    {!! Form::close() !!}
</div>
@endsection