<?php
            if(isset($_POST['bookingTime']))
            {
            include "userdetails.php"; 
            include "../database/db.php";
            $time= $_POST['bookingTime'];
            $check_query = "SELECT * from booktable WHERE time = '$time' LIMIT 1 ";
            $res = mysqli_query($conn, $check_query);
            $check = mysqli_fetch_assoc($res);
            if(!$check)
            {
            $first="INSERT INTO booktable (id, bookername, time) VALUES('','$u_name','$time')";
            $result_1=mysqli_query($conn,$first);
            if($result_1){
            header('location:../afterlogin.php');
            }else{
            echo '<script>alert("Not inserted");</script>';
            header('location:../afterlogin.php');
            }
            }else{
            echo(" Can't book because already booked");
            }
            }       
?>