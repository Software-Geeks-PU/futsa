
<?php
    $fullname = $_POST['fullName'];
    $email  = $_POST['email'];
    $password = md5($_POST['password']);
    $address = $_POST['address'];
    $phonenumber = $_POST['phonenum'];
    require '../../database/db.php';

    if($conn){
        $query = "INSERT INTO users Values ( '', '$fullname' , '$email' , '$password' ,  '$address' , '$phonenumber')";
        $result = mysqli_query($conn , $query);
        if($result){
           
            header('Location:../../index.php');
        }
    }



?>