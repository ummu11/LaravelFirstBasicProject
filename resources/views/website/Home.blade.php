@extends('website.layout')

@section('css')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- owl carousel -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<!--fonts   -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

<link rel="stylesheet" href="css/style.css" type="text/css">
@endsection
@section('heading')
    Home
@endsection


@section('header') 
@parent
@endsection
@section('navbar')
@parent
     {{-- nav bar --}}
      
  {{-- <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
       
        <button type="button" class="about-btn" data-toggle="modal" data-target="#Loginmodel">
          Login
        </button>
        <button type="button" class="about-btn" data-toggle="modal" data-target="#exampleModalLong">
          Register
        </button>
        <a href="{{url('photos/')}}" class="about-btn"> Gallery</a>    
      </div>
    </div>
  </div> --}}
  <nav class="navbar navbar-dark bg-dark">
    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> --}}
    <span><a href="javascript:void(0)" data-toggle="modal" data-target="#Loginmodel"><h3 class="navbar-brand"><i class="fa fa-user-circle" aria-hidden="true">Login</i></h3></a>
    <a href="javascript:void(0)" data-toggle="modal" data-target="#Registermodal"><h3 class="navbar-brand"><i class="fa fa-sign-in" aria-hidden="true">Register</i></h3></a>
    <a href="{{url('/photos')}}"><h3 class="navbar-brand"><i class="fa fa-file-image-o" aria-hidden="true">Gallery</i></h3></a>
    </span>
  </nav>
</div>
{{-- end nav bar--}}
@endsection

@section('body')
     <!-- login  Modal -->
     <div class="modal fade" id="Loginmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fa fa-user-circle" aria-hidden="true">Login</i></h5>
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
                 <a href="javascript:void(0)" id="forgetpasslink" data-toggle="modal" data-target="#forgetpass">forgot password?</a>
               
               </div>
          </form>
 
       </div>
     </div>
   </div>
       {{-- end login  model --}}
     {{-- Forgot password model --}}
 
 <div class="modal fade" id="forgotpassmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Enter Valid Email Address</h5>
         <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <form action="{{url('/resetpassword')}}" id="forgotpassform"method="POST" onsubmit="">
       <div class="modal-body">
         <div class="form-group">
         @csrf
           <input type="email" class="form-control"  name="email" id="forgotemail" aria-describedby="emailHelp" placeholder="Registered Email">
           <span class="print-error-msg" style="color:red;" id="forgotemailspan"></span>
         </div>
         <button type="submit" class="btn btn-primary" id="forgot">Reset</button>
       </div>
     </form>
     </div>
   </div>
 </div>
 
     {{-- End Forgotpassword model --}}



{{--  Register model--}}
<div class="modal fade" id="Registermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-sign-in" aria-hidden="true">Register</i></h5>
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
                <input type="password" class="form-control" placeholder="Enter Password" id="newPassword"  name="password" pattern="(?=.*\d)(?=.*[A-Z])(?=.*[~`!@#$%^&*()\-_+={};:\[\]\?\.\/,]).{6,}" title="Password must contain a capital letter,  a special character and a digit. Password length must be minimum 6 characters."  autocomplete="off"  >
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
                
              </div>
             
          </div>
          <span class="print-error-msg" style="color:red;" id="filespan"></span>
         

          <div class="modal-footer">
              {{-- <input type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
              <input type="submit" class="btn btn-primary" id="register" value="register">
            </div>
      
      </div>
      {{-- end form --}}
  </form>

</div>
</div>
 {{-- end reg modal --}}



     {{-- slider --}}
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
            {{-- <span ><i class="fas fa-arrow-right  fa-rotate-180 arrow"></i></span> --}}
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            {{-- <span ><i class="fas fa-arrow-right arrow"></i></span> --}}
            <span class="sr-only">Next</span>
          </a>
    </div>     
  </div>
</div>
{{-- end Slider --}}
@endsection
@section('foot')
    @parent
@endsection
@section("scripts")
@parent
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
//
$("#forgotpassmodel").on('hide', function(){
  location.reload(true);
});

//
  $("#forgetpasslink").click(function () {
          $("#Loginmodel").modal("hide");
          $("#forgotpassmodel").modal("show");
      });

// Reset password validation
$("#forgot").click(function(e){
          e.preventDefault();


          var _token = $("input[name='_token']").val();
          var email = $("#forgotemail").val();
          $("#forgotemailspan").empty();
          $.ajax({
              url: "resetpassword",
              type:'POST',
              data: {_token:_token, email:email},
              success: function(data) {
                  if($.isEmptyObject(data.error)){
              
                    $('#forgotpassform').submit();
                    alert('Check Your Mail For Resetting password link is active for 30 minutes only')
                  }else{
                   

                         $(".print-error-msg").css('display','block');
                        $("#forgotemailspan").html(data.error.email);
                       
                  }
              }
          });


      }); 
//
//login click
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
          var Role=$("#regrole").val();
        
                    $("#regemailspan").empty();
                    $("#regpasswordspan").empty();
                    $("#dobspan").empty();
                    $("#firstnamespan").empty();
                    $("#lastnamespan").empty();
                    $("#genderspan").empty();
                    $("#phonespan").empty();;
                    $("#filespan").empty();
                    $("#confirmpasswordspan").empty();
                    $("#Rolespan").empty();


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
@endsection
