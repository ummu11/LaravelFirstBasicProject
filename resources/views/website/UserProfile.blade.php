<?php 
$da=Session::get('data');
$imagepath=$da[1];
$name=$da[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    
    <title>{{$name}}</title>

</head>
<body>
  {{-- test --}}
  <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <form action="{{url('/photos')}}" method="POST"> 
          @csrf<button type="submit" >

          <img src="{{asset('image').'/gallery.png'}}" alt="gallery" width="40px" >
         </button>&nbsp;&nbsp;<span class="text-muted">Gallery.</span>
        </form>
        <button type="submit" id="format">
                <img src="{{asset('image').'/data.png'}}" alt="gallery" width="40px" >
         </button> &nbsp;&nbsp;<span class="text-muted">Users.</span>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="form-inline my-2 my-lg-0">    
        <h3 class="navbar-brand">Hello, Mr {{$name}}</h3>
         <img src="{{asset('userimages').'/'.$imagepath}}" alt="Logo" style="width:40px;border-radius:80px;">
       </form>
    </nav>
  </div>
      <div class="container"id="dataformat" style="display:none;">
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
                                        <th>FirstName</th>
                                        <th>LastName</th>
                                        <th>Email</th>
                                        <th>Dob</th>
                                        <th>Status</th>
                                        <th>Created@</th>
                                        <th>Updated@</th>
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
    <div class="modal fade" id="model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
    {{-- end edit form --}}

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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      
        var dataTable = $('#datatab').DataTable({
            processing: true,
            serverSide: true,
            ajax: { 
                url: "{{route('go') }}"},
            columns: [
                {data: 'id', name: 'id'},
                {data: 'firstname', name: 'firstname'},
                {data: 'lastname', name: 'lastname'},
                {data: 'email', name: 'email'},
                {data: 'dob', name: 'dob'},
                {data: 'status', name: 'status'},
                {data: 'created_at', name: 'created@'},
                {data: 'updated_at', name: 'updated@'},
                 {data: 'action',name: 'action',orderable: false},
            ]
          });

        $(document).on('click', '.edit', function(){
              var id = $(this).attr('id');
              
              $.ajax({url: "edit/"+id, dataType: "json", success: function(data){
                $('#firstname').val(data.result.firstname);
                $('#lastname').val(data.result.lastname);
                $('#email').val(data.result.email);
                $('#password').val(data.result.password);
                $('#dob').val(data.result.dob);
                $('#gender').val(data.result.gender);
                $('#model').modal('show');
        
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
            if(data){
                 alert('success');
                 location.reload(true); 
            }
                }});
         } 
        }
///end dataTable delete
    $("#format").click(function(){
    $("#dataformat").fadeToggle();

  });
});
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
     
</body>

</html>