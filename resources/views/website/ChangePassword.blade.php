<?php
if(($_GET['expires']-time())<=0){
    echo"page expired";
}
else{
?>
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
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Change Password</h5>

    <form method="POST" action="{{url('newpass')}}" id="newpassform">
        @csrf
        <div class="form-group">
          <label for="Password">Enter New Password</label>
          <input type="password" class="form-control" id="newpassword"  name="cpassword"aria-describedby="emailHelp">
          <span class="print-error-msg" style="color:red;" id="newpasswordspan" name="confirmcpassword" ></span>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="newpasswordagain">
          <span class="print-error-msg" style="color:red;" id="newpasswordagainspan"></span>
        </div>
        <input type="hidden" name="email" value="{{$_GET['user']}}">
        <button type="submit" class="btn btn-primary" id="changepass">Submit</button>
    </form>
</div>
</div>
<?php }?>
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $("#changepass").click(function(e){
            e.preventDefault();


            var _token = $("input[name='_token']").val();
            var newpassword = $("#newpassword").val();
            var newpasswordagain = $("#newpasswordagain").val();
            
            $("#newpasswordspan").empty();
            $("#newpasswordagainspan").empty();
            $.ajax({
                url: "newpass",
                type:'POST',
                data: {_token:_token, password:newpassword, confirmpassword:newpasswordagain},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                
                    $('#newpassform').submit();
                    alert('success');
                   
                    }else{
                     

                           $(".print-error-msg").css('display','block');
                          $("#newpasswordspan").html(data.error.password);
                         $("#newpasswordagainspan").html(data.error.confirmpassword);
                    }
                }
            });


        }); 
  });
</script>
</body>
</html>