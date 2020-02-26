<?php
function nav(){
echo"<nav aria-label='breadcrumb'>";
echo"<ol class='breadcrumb'>";
echo"<li class='breadcrumb-item'><a href='{{url('/photos')}}'><h5 class='navbar-brand'><i class='fa fa-file-image-o' aria-hidden='true'>Gallery</i></h5></a></li>";
echo"<li class='breadcrumb-item'>";
  
echo"<a href='javascript:void(0)'  class='dropdown-toggle'data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
echo" <h5 class='navbar-brand'><i class='fa fa-user' aria-hidden='true'>Users</i></h5></a>";
echo"<div class='dropdown'>";
     

echo"<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
echo"<a href='{{url('viewdt')}}'  class='dropdown-item' style='text-color:black;'><h5><i class='fa fa-user' aria-hidden='true'>Users List</i></h5></a>";

echo"<a href='javascript:void(0)' class='dropdown-item'data-toggle='modal' data-target='#UploadExcel'><h5><i class='fa fa-upload' aria-hidden='true'>User Upload</i></h5></a>";

echo"</div>";
echo"</div>";
   
    
echo" </li>";
  
 
echo"</ol>";


echo"</nav>";
}
?>