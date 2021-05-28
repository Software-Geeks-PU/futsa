<?php
session_start(); 
if(isset($_POST['submit']))
{ 
$admin_uname=$_POST['admin_uname'];
$password=$_POST['password'];
$password=md5($password);

//importing connection file.
include '../../database/db.php';
//query to check if  email and pw match.
$query = "SELECT * FROM admin WHERE admin_uname='$admin_uname' and password = '$password'";
$result = mysqli_query($conn,$query);
$row = mysqli_num_rows($result);
   
   if ($row == 1) 
        {
            //session is created to transfer user data between pages.
         $_SESSION['admin_uname']=$admin_uname;
         $_SESSION['success']='You are now logged in';
         header('Location: ../../adminPanel/adminAfterLogin.php');
        }
    else{
        echo'<script>alert("Email password not found")</script>';
        header('location: ../../register/registerUser/userRegisterView.php');   
    }
}
?>