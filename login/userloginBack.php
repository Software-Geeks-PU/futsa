<?php
session_start(); 
if(isset($_POST['submit']))
{ 
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);
}
//importing connection file.
include '../database/db.php';

//query to get email and pw.
$query = "SELECT * FROM users WHERE email='$email' and password = '$password'";
$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($result);
   
   if ($row == true) 
        {
         $_SESSION['user_email']=$email;
         header('Location: ../index.php');
        }
    else{
        echo("Email password not found");
        //header('Location: ../register/registerUser/userRegisterView.php');
    }
?>