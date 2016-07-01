@extends('layout.master')
@section('title', 'profile ')
@section('content');
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
@endsection
