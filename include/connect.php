<?php
  $con=mysqli_connect('localhost','root','','mystor');
  if($con){
    echo "connection successful";
  }else{
    die(mysqli_error($con));
  }
?>