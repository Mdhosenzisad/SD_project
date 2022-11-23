@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Student</div>
  <div class="pull-right">
   <a class="btn btn-primary" href="{{ route('students.index')}}">Back</a>
</div>
  <div class="card-body">
      
      <form action="{{ route('students.update', $student->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$student->id}}" id="id" />
        <label>StudentName</label></br>
        <input type="text" name="studname" id="studname" value="{{$student->studname}}" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" value="{{$student->course}}" class="form-control"></br>
        <label>Semister</label></br>
        <input type="text" name="semister" id="semister" value="{{$student->semister}}" class="form-control"></br>
        <label>Section</label></br>
        <input type="text" name="section" id="section" value="{{$student->section}}" class="form-control"></br>
        <label>Group Member</label></br>
        <input type="text" name="groupmember" id="groupmember" value="{{$student->groupmember}}" class="form-control"></br>
        <label>Assignment</label></br>
        <input type="text" name="assignment" id="assignment" value="{{$student->assignment}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop