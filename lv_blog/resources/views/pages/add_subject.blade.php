@extends('layout')
@section('content')
<h1 class="text text-center">Add Subject Data</h1>
 
 <?php
      $message = Session::get('message'); 
      if($message)
        echo $message;
        Session::put('message',null);
 ?>

<div class="container col-md-8">
  <form action="{{url('/save-subject')}}" method="post" >
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Subject Name</label>
      <input type="text" class="form-control" name="subject_name" placeholder="Enter your subject">
    </div>
   </div>
   <div class="form-row">
      <div class="form-group col-md-6">
      <label for="inputEmail4">Code</label>
      <input type="text" class="form-control" name="code" placeholder="Enter code">
    </div>
   </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Credit</label>
      <input type="text" class="form-control" name="credit" placeholder="Enter credit">
    </div>
    </div>
  
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Semester</label>
      <select name="semester_id" required="" class="form-control">
        <option value="" >---------------------Select--------------------</option>
        <option value="1st" >1st</option>
        <option value="2nd">2nd</option>
        <option value="3rd">3rd</option>
        <option value="4th">4th</option>
        <option value="5th" >5th</option>
        <option value="6th">6th</option>
        <option value="7th">7th</option>
        <option value="8th" >8th</option>
      </select>
    </div>
    </div>
  
  <div class="form-group">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection