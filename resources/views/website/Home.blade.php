<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!-- owl carousel -->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
   <!--fonts   -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
   
   <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Home</title>
</head>
<body>
  {{-- nav bar --}}
  <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
       
{{-- modal login trigger --}}
        <button type="button" class="about-btn" data-toggle="modal" data-target="#exampleModalCenter">
          Login
        </button>
        <button type="button" class="about-btn" data-toggle="modal" data-target="#exampleModalLong">
          Register
        </button>
       <form action="{{url('photos/')}}" method="POST">
        @csrf
        <button type="submit" class="about-btn"data-toggle="modal" data-target="#exampleModalScrollable">
        Gallery</button>
       </form>

       
            
{{-- end of modal login triggar --}}
        <!-- login  Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <form method="post" id="loginform" action="{{url('/loginuser')}}">
           <div class="modal-body">
            @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control"  name="email" id="email" aria-describedby="emailHelp">
                  <span class="print-error-msg" style="color:red;" id="emailspan"></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control"  id="password">
                  <span class="print-error-msg" id="passwordspan" style="color:red;"></span>
                </div>
               
                <input type="submit" class="btn btn-primary" id="login"value="submit">
              
              </div>
         </form>

      </div>
    </div>
  </div>
      {{-- end login  model --}}

        
      </div>
    </div>

    <nav class="navbar navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
  </div>
  {{-- end nav bar--}}
    <div class="main-container carousel-height">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">            
          <div class="carousel-inner">
            <div class="carousel-item active first-slider">
              <div class="inside-container">
                <div class="row">
                  <div class="col-lg-12  ">
                    <div class="carousel-text">
                      <span>Hello!<span class="second">Welcome</span>  </span></span>
                      

                    </div>
                  </div> 
                </div>
              </div>
            </div>  
            <div class="carousel-item  first-slider-1">
              <div class="inside-container">
                <div class="row">
                  <div class="col-lg-12 ">
                    <div class="carousel-text"> 
                      <span>Hello!<span class="second">Welcome</span>  </span></span>
                      <p></p>

                    </div>
                  </div> 
                </div>
              </div>
            </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span ><i class="fas fa-arrow-right  fa-rotate-180 arrow"></i></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span ><i class="fas fa-arrow-right arrow"></i></span>
                  <span class="sr-only">Next</span>
                </a>
          </div>     
        </div>
      </div>
      {{--  Register model--}}
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Register</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
        <form method="post" id="regform" action="{{url('/reg')}}" enctype="multipart/form-data">
          @csrf
            <div class="modal-body">
            {{--form  --}}
         
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" >
                    <span class="print-error-msg" style="color:red;" id="firstnamespan"></span>
                  </div>
                  
                  <div class="form-group col-md-6">
                    
                    <input type="text" class="form-control" id="lastname" name="lastname"  placeholder="Last Name">
                    <span class="print-error-msg" style="color:red;" id="lastnamespan"></span>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Enter Email" id="regemail" name="email" >
                  <span class="print-error-msg" style="color:red;" id="regemailspan"></span>
                </div>
                <div class="form-group">
                  
                  <input type="tel" class="form-control" id="regphone" name="phone" pattern="[789][0-9]{9}"  placeholder="Phone Number" >
                  <span class="print-error-msg" style="color:red;" id="phonespan"></span>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="date" class="form-control" id="dob" name="dob"  >
                    <span class="print-error-msg" style="color:red;" id="dobspan"></span>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control" id="reggender" name="gender">
                      <option selected>Gender</option>
                      <option value="m">Male</option>
                      <option value="f">Female</option>
                    </select>
                    <span class="print-error-msg" style="color:red;" id="genderspan"></span>
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="password" class="form-control" placeholder="Enter Password" id="newPassword"  name="password" pattern="(?=.*\d)(?=.*[A-Z])(?=.*[~`!@#$%^&*()\-_+={};:\[\]\?\.\/,]).{6,}" title="Password must contain a capital letter,  a special character and a digit. Password length must be minimum 6 characters."  autocomplete="off"  onchange="checkPassword()">
                      <span class="print-error-msg" style="color:red;" id="regpasswordspan"></span>
                    </div>
                    <div class="form-group col-md-6">
                     
                      <input type="password" class="form-control" id="newPasswordAgain" name="confirmpassword" placeholder="Confirm Password" title="Passwords must match"  autocomplete="off" >
                      <span class="print-error-msg" style="color:red;" id="confirmpasswordspan"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="file" aria-describedby="inputGroupFileAddon01" name="file">
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      <span class="print-error-msg" style="color:red;" id="filespan"></span>
                    </div>
                   
                </div>
               
    
                <div class="modal-footer">
                    {{-- <input type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <input type="submit" class="btn btn-primary" id="register" value="register">
                  </div>
            
            </div>
            {{-- end form --}}
        </form>
    
      </div>
      {{-- end reg modal --}}
 <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="js/script.js">  </script>
  <script>
  
  $(document).ready(function() {
        $("#login").click(function(e){
            e.preventDefault();


            var _token = $("input[name='_token']").val();
            var email = $("#email").val();
            var password = $("#password").val();
            $("#emailspan").empty();
            $("#passwordspan").empty();
            $.ajax({
                url: "loginuser",
                type:'POST',
                data: {_token:_token, email:email, password:password},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                
                      $('#loginform').submit();
                    }else{
                     

                           $(".print-error-msg").css('display','block');
                          $("#emailspan").html(data.error.email);
                         $("#passwordspan").html(data.error.password);
                    }
                }
            });


        }); 
// regvalidation

$("#register").click(function(e){
            e.preventDefault();

  
            var _token = $("input[name='_token']").val();
            var email = $("#regemail").val();
             var firstname = $("#firstname").val();
             var lastname = $("#lastname").val();
             var gender = $("#reggender").val();
             var file = $("#file").val();
             var dob = $("#dob").val();
            var regpassword = $("#newPassword").val();
            var confirmpassword = $("#newPasswordAgain").val();
            var phone = $("#regphone").val();
        
                      $("#regemailspan").empty();
                      $("#regpasswordspan").empty();
                      $("#dobspan").empty();
                      $("#firstnamespan").empty();
                      $("#lastnamespan").empty();
                      $("#genderspan").empty();
                      $("#phonespan").empty();;
                      $("#filespan").empty();
                      $("#confirmpasswordspan").empty();

            $.ajax({
                url: "reg",
                type:'POST',
                data: {_token:_token, email:email, password:regpassword,firstname:firstname,lastname:lastname,gender:gender,file:file,dob:dob,confirmpassword:confirmpassword,phone:phone},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                      if(data.success){
                        $('#regform').submit(); 
                      }
                      
                    }else{
                      
                      $("#regemailspan").html(data.error.email);
                      $("#regpasswordspan").html(data.error.password);
                      $("#dobspan").html(data.error.dob);
                      $("#firstnamespan").html(data.error.firstname);
                      $("#lastnamespan").html(data.error.lastname);
                      $("#genderspan").html(data.error.gender);
                      $("#phonespan").html(data.error.phone);
                      $("#filespan").html(data.error.file);
                      $("#confirmpasswordspan").html(data.error.confirmpassword);

                    }
                }
            });


        }); 
// 

    });
  </script> 
</body>
</html>