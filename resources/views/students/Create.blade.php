@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Add New Students</div>
  <div class="pull-right">
   <a class="btn btn-primary" href="{{ route('students.index')}}">Back</a>
</div>
  <div class="card-body">
      
      <form action="{{ route('students.store') }}" method="post">
        {!! csrf_field() !!}
        <label>StudentName</label></br>
        <input type="text" name="studname" id="studname" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" class="form-control"></br>
        <label>Semister</label></br>
        <input type="text" name="semister" id="semister" class="form-control"></br>
        <label>Section</label></br>
        <input type="text" name="section" id="section" class="form-control"></br>
        <label>Group Member</label></br>
        <input type="text" name="groupmember" id="groupmember" class="form-control"></br>
        <label>Assignment</label></br>
        <input type="text" name="assignment" id="assignment" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop