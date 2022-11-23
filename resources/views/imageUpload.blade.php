<html lang="en">
<head>
  <title>Student Management</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
@extends('main')

@section('content')
<body>
<body>
  <div class="jumbotron text-center" style="margin-bottom:0">
  <h2>Upload Your Assignment</h2>
</div>
<br>
<div class="container">
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> Here have some issue please check<br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif
  
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif
  
 
<form action="{{ url('image') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
    <div class="input-group realprocode control-group lst increment" >
      <input type="file" name="filenames[]" class="myfrm form-control">
      <div class="input-group-btn"> 
        <button class="btn btn-success" type="button"> <i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
      </div>
    </div>
    <div class="clone hide">
      <div class="realprocode control-group lst input-group" style="margin-top:10px">
        <input type="file" name="filenames[]" class="myfrm form-control">
        <div class="input-group-btn"> 
          <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
        </div>
      </div>
    </div>
  
    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
  
     
</div>

<!-- <div class="col-sm">
    <a href="{{ url('image') }}" download="{{url('image')}}"method="post">
    {!! csrf_field() !!}
        @method("PATCH")
        <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-download">download</i></button>
        </a>
</div> -->
</form>   
<div class="pull-right">
   <a class="btn btn-primary" href="{{ route('dashboard') }}">Back</a>
</div>


<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".realprocode").remove();
      });
    });
</script>
</body>
</html>
@endsection('content')