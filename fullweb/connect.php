<?php 
   $con= mysqli_connect("localhost","root","","register");

   if(mysqli_connect_error()){
    echo "<script>alert('cannot connect to database');</script>";
    exit();
   }
?>