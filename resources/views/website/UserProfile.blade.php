@php
   $da=Session::get('data');
$imagepath=$da[1];
$name=$da[0];
Session::put('data',$da); 
@endphp 
@extends('website.layout')
@section('css')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"> 
@endsection
@section('header')
    @parent
@endsection
@section('title')
{{$name}}
@endsection
@section('heading')
   Profile
@endsection

@section('profileinfo')
@parent
<a href="{{url('/logout')}}" ><h3 class="navbar-brand"><i class="fa fa-sign-out" aria-hidden="true">Logout</i></h3></a>   
  <h3 class="navbar-brand">Hello, Mr {{$name}}</h3>
   <img src="{{asset('userimages').'/'.$imagepath}}" alt="Logo" style="width:40px;border-radius:80px;">
@endsection

{{-- <body style="background-image:url('{{asset('image')}}/bussines-1.jpg')"> --}}
  
@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a href="javascript:void(0)"  class="dropdown-toggle"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <h5 class="navbar-brand"><i class="fa fa-user" aria-hidden="true">Users</i></h5></a>
        <div class="dropdown">
         
      
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a href="{{url('viewdt')}}"  class="dropdown-item" style="text-color:black;"><h5><i class="fa fa-user" aria-hidden="true">Users List</i></h5></a>
      
           <a href="javascript:void(0)"  class="dropdown-item" data-toggle="modal" data-target="#UploadExcel"><h5><i class="fa fa-upload" aria-hidden="true">User Upload</i></h5></a>
      
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a href="{{url('/photos')}}"><h5 class="navbar-brand"><i class="fa fa-file-image-o" aria-hidden="true">Gallery</i></h5></a>
      </li>
    </ul>
  </div>
</nav>


</nav>
{{--End Navigation Bar  --}}


{{-- breadcrumb navbar --}}
{{-- @section('breadcrumb')
@parent
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{url('/photos')}}"><h5 class="navbar-brand"><i class="fa fa-file-image-o" aria-hidden="true">Gallery</i></h5></a></li>
  <li class="breadcrumb-item">
  
    <a href="javascript:void(0)"  class="dropdown-toggle"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <h5 class="navbar-brand"><i class="fa fa-user" aria-hidden="true">Users</i></h5></a>
    <div class="dropdown">
     
  
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a href="{{url('viewdt')}}"  class="dropdown-item" style="text-color:black;"><h5><i class="fa fa-user" aria-hidden="true">Users List</i></h5></a>
  
       <a href="javascript:void(0)"  class="dropdown-item" data-toggle="modal" data-target="#UploadExcel"><h5><i class="fa fa-upload" aria-hidden="true">User Upload</i></h5></a>
  
      </div>
    </div>
   
    
  </li>
  
  
  </ol>
  
  
  </nav>
@endsection --}}
{{ Breadcrumbs::render('home') }}

{{-- End breadcrumb navbar --}}
@endsection  
@section('body')
{{--  --}}
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('image')}}/bussines-card-3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image')}}/bussines-card-2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('image')}}/bussines-card.jpg" alt="Third slide">
    </div>
  </div>
</div>
{{--  --}}
    {{-- Gallery start--}}
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <button data-toggle="modal" data-target="#exampleModalLong" style="margin-left:20%;">
          <img src="{{asset('image').'/view.png'}}" alt="gallery" width="60px" height="60px" >
        </button>
        <button type="button"  data-toggle="modal" data-target="#exampleModalLong">
          <img src="{{asset('image').'/upload.png'}}" alt="gallery" width="60px" height="60px" > 
        </button>
        {{----}}
      </div>

    </div>
  </div>
</div>

{{-- Gallery end --}}
{{-- images model --}}
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">

          <div class="custom-file">
            <form action="{{url('/insertg')}}" method="POST" enctype="multipart/form-data">
              @csrf
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="file">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            <br>
          </div>
          <div class="form-group col-md-6">
            <select id="Category" class="form-control" name="Category">
              <option selected>Category</option>
              <option value="festive">festive</option>
              <option value="normal">Normal</option>
            </select>
          </div>
            <button type="submit" class="btn btn-primary">Upload</button>
          </form>
      </div>
      </div>

    </div>
  </div>
</div>

{{-- end images model --}}
{{-- Upload Excel Modal --}}
<div class="modal fade" id="UploadExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Excel File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('import')}}" method="POST" id="uploadexcelform"enctype="multipart/form-data" >
      <div class="modal-body">
          @csrf
          <input type="file" class="custom-file-input" id="uploadfile" aria-describedby="inputGroupFileAddon01" name="file">
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          <span class="print-error-msg" style="color:red;" id="filespan"></span><br>
           <button type="submit" class="btn btn-primary" id="uploadexcel">upload</button>
           
      </div>
    </form>
    </div>
  </div>
</div>
{{-- End Upload Excel Model --}}
@endsection
@section('foot')
    @parent
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">

$("#uploadexcel").click(function(e){
        e.preventDefault();


        var _token = $("input[name='_token']").val();
         var file = $("#uploadfile").val();
                  $("#filespan").empty();
               

        $.ajax({
            url: "import",
            type:'POST',
            data: {_token:_token,file:file},
            success: function(data) {
                if($.isEmptyObject(data.error)){
                  if(data.success){
                    $('#uploadexcelform').submit(); 
                  }
                  
                }else{
                  

                  $("#filespan").html(data.error.file);


                }
            }
        });


    }); 
// 
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endsection
   

