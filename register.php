<?php
 require 'connection.php';
 $username=$_POST['username'];
 $email=$_POST['email'];
 $password=$_POST['password'];

 $insertQuery="INSERT INTO `user`(`username`,`email`,`password`) VALUES('$username','$email','$password')";
 $result=mysqli_query($con,$insertQuery);

 if($result){
    echo "resister success";
 }
 else{
    echo "failed";
 }

 ?>