@extends('layouts.master')

@section('content')

// our view content goes here

{!! Form::open(array('route' => 'handleLogin'))!!}
    <div class="form-group">
        {!! Form::label('email')!!}
        {!! Form::text('email',null, array ('class' => 'form-control')) !!}
    </div>
     <div class="form-group">
        {!! Form::label('password') !!}
        {!! Form::password('password', array ('class' => 'form-control')) !!}
    </div>
      {!! Form::submit('null', array ('class' => 'btn btn-default')) !!}
      {!! Form::close() !!}
@endsection