@extends('layout')
@section('content')
<h1 class="text text-center">Edit Subject Data</h1>
 
 <?php
      $message = Session::get('message'); 
      if($message)
        echo $message;
        Session::put('message',null);
 ?>

<div class="container col-md-8">
  <form action="{{url('/update-subject'.$data_info->subject_id)}}" method="post" >
  	@csrf
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Subject Name</label>
      <input type="text" class="form-control" value="{{$data_info->subject_name }}" name="subject_name" placeholder="Enter your subject">
    </div>
   </div>
   <div class="form-row">
      <div class="form-group col-md-6">
      <label for="inputEmail4">Code</label>
      <input type="text" class="form-control" value="{{$data_info->code}}" name="code" placeholder="Enter code">
    </div>
   </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Credit</label>
      <input type="text" class="form-control" value="{{$data_info->credit}}" name="credit" placeholder="Enter credit">
    </div>
    </div>
  
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Semester</label>
      <select name="semester_id" required="" class="form-control">
        <option value="" >---------------------Select--------------------</option>
        <option <?php echo $data_info->semester_id == '1st' ? 'selected':'' ?> value="1st" >1st</option>
        <option <?php echo $data_info->semester_id == '2nd' ? 'selected':'' ?> value="2nd">2nd</option>
        <option <?php echo $data_info->semester_id == '3rd' ? 'selected':'' ?> value="3rd">3rd</option>
        <option <?php echo $data_info->semester_id == '4th' ? 'selected':'' ?> value="4th">4th</option>
        <option <?php echo $data_info->semester_id == '5th' ? 'selected':'' ?> value="5th">5th</option>
        <option <?php echo $data_info->semester_id == '6th' ? 'selected':'' ?> value="6th">6th</option>
        <option <?php echo $data_info->semester_id == '7th' ? 'selected':'' ?> value="7th">7th</option>
        <option <?php echo $data_info->semester_id == '8th' ? 'selected':'' ?> value="8th">8th</option>
      </select>
    </div>
    </div>
  
  <div class="form-group">
  </div>
  <button type="submit" class="btn btn-success">Update</button>
</form>
</div>
@endsection