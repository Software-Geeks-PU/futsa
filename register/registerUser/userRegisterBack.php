<?php
$errors = array();

//if register button is clicked
if(isset($_POST['register'])){

    //getting data from input of form and inserting into variable
    $username = $_POST['fullName'];
    $email  = $_POST['email'];
    $password = md5($_POST['password']);
    $address = $_POST['address'];
    $phonenumber = $_POST['phonenum'];
    require '../../database/db.php';

    //checking if email already exists
     $user_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
     $result = mysqli_query($conn, $user_check_query);
     $user = mysqli_fetch_assoc($result);
     //if user doesn't exists
     if(!$user){
        $query = "INSERT INTO user Values ('','$username' , '$email' , '$password' ,  '$address' , '$phonenumber', 'user')";
        $result = mysqli_query($conn , $query);
        if($result){
            header('Location: /futsa/login/userLogin/userLoginView.php');
        }
        }else {
         echo(mysqli_error($conn));
     }

}
?>