@extends('layout')
@section('content')
<h1 class="text text-center">View Data</h1>
 <?php
      $message = Session::get('message'); 
      if($message)
        echo $message;
        Session::put('message',null);
 ?>
<div class="container col-md-8" style="margin-top: 30px;">
	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Subject Id</th>
      <th scope="col">subject Name</th>
      <th scope="col">Code</th>
      <th scope="col">Credit</th>
      <th scope="col">Semester</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  @foreach($all_info as $view )
  <tbody>
    <tr>
      <th scope="row">{{$view->subject_id}}</th>
      <td>{{$view->subject_name}}</td>
      <td>{{$view->code}}</td>
      <td>{{$view->credit}}</td>
      <td>{{$view->semester_id}}</td>
       <td>
       	<a href="{{URL::to('/edit-subject'.$view->subject_id)}}"><i class="fa fa-pencil-square-o"></i></a>
       	||
       	
       	<a href="{{URL::to('/delete-subject'.$view->subject_id)}}"><i class="fa fa-trash"></i></a>
       </td>


    </tr>
</tbody>
@endforeach
</table>
</div>
@endsection