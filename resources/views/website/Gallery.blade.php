<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{asset('css')}}/gallery.css" rel="stylesheet">
  </head>
<body style="background-color:#d8dce3;">
  {{-- Nav --}}
  <nav class="navbar-expand-lg navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="javasctipt:void(0);" >Gallery Section</a>
    <a class="navbar-brand" href="javascript:history.go(-1)" ><i class="fa fa-home" aria-hidden="true">Home</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <?php
        $da=Session::get('data');
        
        if(!empty($da)){

        ?>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#UploadModal"><i class="fa fa-file-image-o" aria-hidden="true">Upload</i></a>
        </li>
      <?php  }?>


      </ul>
    </div>
  </nav>
  {{-- Nav --}}
  

      {{-- images model --}}
<div class="modal fade" id="UploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <span class="text-muted"><h4>Upload Image</h4></span>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{url('/insertg')}}" method="POST"  id='imageuploadform'enctype="multipart/form-data">
        <div class="modal-body">
              @csrf
              <div class="form-row">
                <select id="Category" class="form-control" name="Category" aria-placeholder="choose Category">
                  <option>Choose Category</option>
                  <option value="ct1">festive</option>
                  <option value="ct2">Normal</option>
                </select>
                <span class="print-error-msg" style="color:red;" id="categoryspan"></span>
              </div>
              <br>
                <div class="input-group mb-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="newimage" aria-describedby="inputGroupFileAddon01" name="file">
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      
                    </div>
                    
                </div>
                <span class="print-error-msg" style="color:red;" id="imagefilespan"></span>

            <div class="modal-footer">
                
                <button type="submit" class="btn btn-primary" id="uploadimage">Upload</button>
              </div>
              
           
        </div>
        </form>
        </div>
  
      </div>
    
    </div>
  
  {{-- end images model --}}


  {{-- gallery sample --}}
  
  <div class="container"id="imagecategory" style="">
    <div class="gallery">
      <span><form action="{{url('gal/ct1')}}" method="POST">@csrf<button type="submit" class=""><img src="{{asset('image').'/view.png'}}" class="card-img-top" alt="..."></button></form>
    </div>
    <div class="gallery">
      <form action="{{url('gal/ct2')}}"  method="POST">@csrf<button type="submit" class=""><img src="{{asset('image').'/data.png'}}" class="card-img-top" alt="..."></button></form></span>

    </div>
    

    </div>
  </div>
    {{-- gallery sample --}}
</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="">
   $(document).ready(function() {
        $("#uploadimage").click(function(e){
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            var file = $("#newimage").val();
            var Category = $("#Category").val();
            $.ajax({
              url: "insertg",
              type:'POST',
              data: {_token:_token, file:file, Category:Category},
              success: function(data) {
                    if($.isEmptyObject(data.error)){
                     
                     $('#imageuploadform').submit();
                    }else{
                         

                     $(".print-error-msg").css('display','block');
                    $("#imagefilespan").html(data.error.file);
                    $("#imagefilespan").html(data.error.Category);
                    }
           

                  }});
            });
  //           $("#show").click(function(){
  //       $("#imagecategory").fadeToggle();

  // });


   });
</script>

</html>