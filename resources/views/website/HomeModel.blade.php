@section('model')
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
@show