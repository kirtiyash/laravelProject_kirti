@extends('layout.master')
@section('title', 'profile ')
<div>
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
</div>
