<?php 
$da=Session::get('data');
$imagepath=$da[1];
$name=$da[0];
if(empty($da)){
   print_r('loginfirst');
}
else{
?>
@extends('website.layout')
@section('css')
@parent
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('title')
    User Listing
@endsection
@section('heading')

@endsection

@section('navbar')
@parent
<nav class="navbar-expand-lg navbar navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="javascript:void(0)">UserList<span class="sr-only">(current)</span></a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">    

     </form>
  </div>
</nav>
{{ Breadcrumbs::render('Users') }}
@endsection
@section('header')
    @parent
@endsection
@section('profileinfo')
<h3 class="navbar-brand">{{$name}}</h3>
<img src="{{asset('userimages').'/'.$imagepath}}" alt="Logo" style="width:40px;border-radius:80px;">
@endsection


@section('body')
  
  
<div class="container"id="dataformat" >
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
          
                </div>

                <div class="card-body" >
                    <div class="table-responsive">
                        <table id="datatab"class="table table-bordered datatable" >
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                   
                                    <th>Email</th>
                                    <th>Dob</th>
                                    <th>Status</th>
                                    <th width="150" class="text-center">Action</th>
        
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td id="use"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                           
                                <td></td>
                                <td></td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- edit form --}}
<div class="modal fade" id="datatablemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="form_result" enctype="multipart/form-data" >
        @csrf
          <div class="modal-body">
          {{--form  --}}
       
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                </div>
                <div class="form-group col-md-6">
                 
                  <input type="text" class="form-control" id="lastname" name="lastname"  placeholder="Last Name"required>
                </div>
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" id="email" placeholder="Enter Email" name="email" required>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="date" class="form-control" id="dob" name="dob" required >
                </div>
                <div class="form-group col-md-6">
                  <select id="gender" class="form-control" name="gender">
                    <option selected>Gender</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="password" class="form-control" id="password" autocomplete name="password" placeholder="Password" required>
                </div>
              </div>
              <button type="button" class="btn btn-primary " id="editbyform">Edit</button>
              </div>
             
          </div>
          
          {{-- end form --}}
      </form>

    </div>
  </div>
</div> 
{{-- role model --}}
<div class="modal fade" id="Rolemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Rolemodel">Choose Type Of Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="javascript:void(0)" method="POST"></form>
      <div class="modal-body">
        <div class="form-row">
          <select class="form-control" id="UserRole" name="gender">
            <option selected>Choose Role</option>
            <option value="admin">Admin</option>
            <option value="public">public</option>
          </select>
      </div>
      <br>
      <button type="button" class="btn btn-secondary"  id="rolebtn">Assign</button>
    </div>
    </div>
  </div>
</div>
{{-- role model --}}
  @endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
 $(document).ready(function() {
    
  var dataTable = $('#datatab').DataTable({
      processing: true,
      serverSide: true,
      ajax: { 
          url: "{{route('go') }}"},
          
      columns: [
       
          {data: 'id', name: 'id'},
          {data: 'firstname', name: 'Name',
          "render":function(data, type, full, meta){
       return full.firstname +" "+ full.lastname;
          }},
          {data: 'email', name: 'email'}, 
          {data: 'dob', name: 'dob'},
          {data: 'status', name: 'status'},
           {data: 'action',name: 'action',orderable: false},
      ]
    
    });
   
  $(document).on('click', '.edit', function(){
        var id = $(this).attr('id');
        
        $.ajax({url: "edit/"+id, dataType: "json", success: function(data){
          if(data.result=='1'){
            alert("This Account is also an Admin Account")
          }
          else if(data.result=='2'){
            alert("You do not have permission")
          }
          else{
          $('#firstname').val(data.result.firstname);
          $('#lastname').val(data.result.lastname);
          $('#email').val(data.result.email);
          $('#password').val(data.result.password);
          $('#dob').val(data.result.dob);
          $('#gender').val(data.result.gender);
          $('#datatablemodel').modal('show');
          }
    }});

  });


  $(document).on('click','#editbyform',function(e){
      
  var myform = document.getElementById("form_result");
  var fd = new FormData(myform );
 
  $.ajax({
    url: "editbyuser",
    data: fd,
    type:"POST",
    processData: false,
    contentType: false,
    dataType:"json",
  success:function (data) {
   if(data.result){
     alert('success');
     location.reload(true)
   }
  }
})


  });

// datatable delete

  $(document).on('click', '.delete', function(){
    var id = $(this).attr('id');
        myFunction(id);
    });
  function myFunction(id) {
  if (confirm("Are you sure you want to delete")) {
    $.ajax({url: "del"+"/"+id, dataType: "json", success: function(data){
    
      if(data.result=='1'){
           alert('success');
           location.reload(true); 
      }
      else{
        alert("You Don't have pemission")
      }
          }});
   } 
  }
///end dataTable delete
var id;

$(document).on('click', '.assignbtn', function(){
    id = $(this).attr('id');


    });
    $("#rolebtn").click(function (e) { 
      e.preventDefault();
      // var id=$("").attr("id");
      var role=$('#UserRole').val();
    var _token = $("input[name='_token']").val();
      $.ajax({
          type: "post",
          url: "assign",
          dataType: "json",
          data: {_token:_token, id:id,role:role},
          success: function (data) {
            alert(data.success)
            $("#Rolemodel").modal("hide");
          }
        });
    });
//
});
</script>
@endsection
@section('footer')
    @parent
@endsection
<?php
}?>