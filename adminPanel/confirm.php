<?php 

    include '../database/db.php';
    error_reporting(0);
    $time = $_GET['Ctime'];
    $confirm = "UPDATE booktable SET flag=2 WHERE time='$time'";
    $result = mysqli_query($conn,$confirm);
    
    if($result)
    {   
        echo'<script>alert("'.$time.' has been Booked :) ")</script>';
        header ('location: adminAfterLogin.php');
    }
    else{
        echo "failed";
    }

?>