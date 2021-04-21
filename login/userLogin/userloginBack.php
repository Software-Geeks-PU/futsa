<?php
session_start(); 
if(isset($_POST['submit']))
{ 
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);
//importing connection file.
include '../../database/db.php';

//query to check if  email and pw match.
$query = "SELECT * FROM users WHERE email='$email' and password = '$password'";
$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($result);
   
   if ($row == 1) 
        {
            //session is created to transfer user data between pages.
         $_SESSION['email']=$email;
         $_session['success']='You are now logged in';
         header('location: ../../afterlogin.php');
        }
    else{
        echo'<script>alert("Email password not found")</script>';
        header('location: ../../register/registerUser/userRegisterView.php'); 
    }
  
    }
?>