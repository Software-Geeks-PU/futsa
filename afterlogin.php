<?php 
  session_start(); 
  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login/userLogin/userLoginView.php');
  } else 
    { 
     include "reserve/book.php"; 
     }
if (isset($_GET['logout'])) 
{
session_destroy();
unset($_SESSION['email']);
header("location: ../login/userLogin/userLoginView.php");
}
?>