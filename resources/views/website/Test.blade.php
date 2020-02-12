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
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    {{-- nav Bar --}}
    <nav class=" navbar-expand-lg navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">

            <li class="nav-item">
        &nbsp;&nbsp;<a href="javascript:history.go(-1)"  ><h3 class="navbar-brand"><i class="fa fa-home" aria-hidden="true">Home</i></h3></a>
            </li>
  
          </ul>
        </div>
       
        <form class="form-inline my-2 my-lg-0">    
          <h3 class="navbar-brand">{{$name}}</h3>
           <img src="{{asset('userimages').'/'.$imagepath}}" alt="Logo" style="width:40px;border-radius:80px;">
         </form>
         
      </nav>
    {{-- end nav bar --}}
    <div class="alert alert-success" role="alert">
      Succesfully imported  {{$wholedata[0]}}
      </div>
    <div class="alert alert-danger" role="alert">
        Users that are Not Imported
      </div>
    <table class="table ">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $data=$wholedata[1];
            foreach($data as $up){
                
            ?>
          <tr>
            <th scope="row">{{$up[0]}}</th>
            <td>{{$up[1]}}</td>
            <td>{{$up[2]}}</td>
            <td>{{$up[3]}}</td>
          </tr>
        <?php }?>
        </tbody>
      </table>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
</body>
</html>