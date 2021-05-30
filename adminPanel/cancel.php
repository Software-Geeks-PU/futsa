<?php 

    include '../database/db.php';
    error_reporting(0);
    $booking_id = $_GET['booking_id'];
    $delete = "DELETE FROM booking WHERE booking_id='$booking_id'";
    $result = mysqli_query($conn,$delete);
    
    if($result)
    {   
        echo'<script>alert("'.$time.' has been deleted")</script>';
        header ('location: adminAfterLogin.php');
    }
    else{
        echo "failed";
    }

?>