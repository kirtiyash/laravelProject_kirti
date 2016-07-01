@extends('layout.master')
@section('blog')
<script src="assets/blog.css"></script>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Blog</h4>
      <ul class="nav nav-pills nav-stacked">
        <li ><a href="#section1">Home</a></li>
        <li><a href="profile">Profile</a></li>
        <li class="active"><a href="friends">Friends</a></li>
        <li><a href="#section3">Photos</a></li>
        <li><a href="logout">Logout</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>
</div>
@endsection
@section('content')
<div class="signup-form">
     @foreach($users as $data)
    
        <li class="profile">Name:{{ $data->name }}</li>
        <li class="profile">Age:{{ $data->age }}</li>
        <li class="profile">Gender:{{ $data->gender }}</li>
        <li class="profile">Address:{{ $data->address }}</li>
        <li class="profile">Email:{{ $data->email }}</li>
        
     @endforeach
    {!! Form::open(array('url' => 'edit')) !!}
    <div class="form-group">
         
        {!! Form::label('Name') !!}
        {!! Form::text('name',$data->name ,array('class' =>'form-control','id'=>"email","placeholder"=>'enter your name')) !!}
    </div>
     <div class="form-group">
        {!! Form::label('Age') !!}
        {!! Form::text('age',$data->age,array('class' =>'form-control')) !!}
    </div>
     <div class="form-group">
        {!! Form::label('Gender') !!}<br>
       {!! Form::radio('male','',array('class' =>'form-control')) !!} {!! Form::label('Male') !!}
        {!! Form::radio('female','',array('class' =>'form-control')) !!}{!! Form::label('Female') !!}
    </div>
     <div class="form-group">
        {!! Form::label('Address') !!}
        {!! Form::text('address',$data->address,array('class' =>'form-control')) !!}
    </div>
     <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email',$data->email,array('class' =>'form-control','id'=>"email","placeholder"=>'email address')) !!}
    </div>
    
   
    {!! Form::submit('update',array('class'=>'btn btn-primary','name'=>'register')) !!}
    {!! Form::close() !!}
</div>
@endsection