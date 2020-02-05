<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Gallery Section</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalLong">Upload</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">show</a>
            </li>
          </ul>

        </div>
      </nav>

      {{-- --}}

      {{--  --}}

      {{-- images model --}}
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <span class="text-muted"><h4>Upload Image</h4></span>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{url('/insertg')}}" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
              @csrf
                <div class="input-group mb-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="file">
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                   
                </div>
               
            <div class="form-row">
              <select id="Category" class="form-control" name="Category">
                <option selected>Choose Category</option>
                <option value="ct1">festive</option>
                <option value="ct2">Normal</option>
              </select>
            </div>
            <div class="modal-footer">
                
                <button type="submit" class="btn btn-primary">Upload</button>
              </div>
              
           
        </div>
        </form>
        </div>
  
      </div>
    
    </div>
  
  {{-- end images model --}}
  <div id="show">
       <div class="card" style="width: 18rem;float:left;margin-left:10%;margin-top:20px;">
        <span><form action="{{url('gal/ct1')}}" method="POST">@csrf<button type="submit" class=""><img src="{{asset('image').'/view.png'}}" class="card-img-top" alt="..."></button></form>
  </div>
  <div class="card" style="width: 18rem;float:right;margin-right:10%;margin-top:20px;">
      <form action="{{url('gal/ct2')}}"  method="POST">@csrf<button type="submit" class=""><img src="{{asset('image').'/data.png'}}" class="card-img-top" alt="..."></button></form></span>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
</script>
</html>