<?php 

    include '../database/db.php';
    error_reporting(0);
    $booking_id = $_GET['booking_id'];
    $confirm = "UPDATE booking SET status='booked' WHERE booking_id='$booking_id'";
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