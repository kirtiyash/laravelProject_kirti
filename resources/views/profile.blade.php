@extends('layout.master')
@section('title', 'profile ')
@section('blog')
   <script src="assets/blog.css"></script>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Blog</h4>
      <ul class="nav nav-pills nav-stacked">
        <li ><a href="#section1">Home</a></li>
        <li class="active"><a href="profile">Profile</a></li>
        <li><a href="friends">Friends</a></li>
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
<div>
<div class="col-sm-9">
     <h1>My profile</h1
     <ul class="profile">

     @foreach($users as $data)
    
        <li class="profile">Name:{{ $data->name }}</li>
        <li class="profile">Age:{{ $data->age }}</li>
        <li class="profile">Gender:{{ $data->gender }}</li>
        <li class="profile">Address:{{ $data->address }}</li>
        <li class="profile">Email:{{ $data->email }}</li>
        
     @endforeach
   </ul>
    <a href="update">update your profile</a>
    
@endsection
