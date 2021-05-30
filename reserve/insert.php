<?php
            if(isset($_POST['book_submit']))
            {
            session_start();
            include "../database/db.php";
            
            $time= $_POST['bookingTimeid'];
            $futsalId= $_POST['futsalid'];
            $user_id = $_SESSION['id'];

            

            $sql="INSERT INTO booking  VALUES('','$futsalId', '$user_id', '$time', 'pending', now())";
            $result_1=mysqli_query($conn,$sql);
            if($result_1){
            header('location:../afterlogin.php?futsal_id='.$futsalId.'');
            }else{
            echo mysqli_error($conn);
            }
            }else{
            echo '<script>alert("Cant Booked");</script>';
            header('location:../afterlogin.php?futsal_id='.$futsalId.'123');
            }     
?>