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
$query = "SELECT * FROM user WHERE email='$email' and password = '$password'";
$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($result);
   
   if ($row == 1) 
        {
        $data = mysqli_fetch_assoc($result);
        //session is created to transfer user data between pages.
         $_SESSION['email'] = $email;
         $_SESSION['id'] = $data['id'];
         $_SESSION['role'] = $data['role'];
         $_SESSION['name'] = $data['username'];


         $_session['success'] = 'You are now logged in';
         header('location: ../../index.php');
        }
    else{
        echo'<script>alert("Email password not found")</script>';
        header('location: ../../register/registerUser/userRegisterView.php'); 
    }
  
    }
?>