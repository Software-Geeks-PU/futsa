<?php 

    include 'database/db.php';
    $time = $_GET['Ctime'];
    $delete = "DELETE FROM booktable WHERE time='$time'";
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