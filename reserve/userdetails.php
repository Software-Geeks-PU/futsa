<?php
session_start();
$userEmail=$_SESSION['email'];

if (!$userEmail)
{
 header('location:../login/userLogin/userLogin.php');
}
include "../database/db.php";
$result = mysqli_query($conn,"SELECT * FROM users WHERE email='$userEmail' ");
$data=mysqli_fetch_assoc($result);

$u_id= $data['id'];
$u_name= $data['fullname'];
$u_pass= $data['password'];
$u_phone= $data['phonenum'];
$u_email= $data['email'];
$u_address=$data['address'];

$_SESSION['u_name']=$u_name;
$_SESSION['u_id']=$u_id;
$_SESSION['u_pass']=$u_pass;
$_SESSION['u_phone']=$u_phone;
$_SESSION['u_email']=$u_email;
$_SESSION['u_address']=$u_address;
?>