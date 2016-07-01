@extends('layout.master')
@section('title', 'users ')
@section('blog')
   <script src="assets/blog.css"></script>
<style>
table, td {
    border: 1px ;
    border-collapse: collapse;
}
 td {
    padding: 20 px;
}
</style
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
<div>
<div class="col-sm-9">
     <h1>Friends</h1
     <ul class="frnds">
    
     @foreach($users as $data)
    
         <table>
            <tr>
               <td >{{ $data->name }}</td>
                 <td>
                   {{Form::open(array('route' => array('delete', $data->id)))}}
                        {{ Form::hidden('id', $data->id) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {{ Form::close() }}
               </td>
              
            </tr>
        </table>
      
     @endforeach
   </ul>
</div>
@endsection