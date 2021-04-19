<?php 
    $admin_uname = $_POST['admin_uname'];
    $password =md5($_POST['password']);
    require '../../database/db.php';
     
    //checking if user exist already
    $user_check_query = "SELECT * FROM admin WHERE admin_uname ='$admin_uname' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if(!$user){
        //aba chi sql ma data entry 
        $query = "INSERT INTO admin Values ( '', '$admin_uname' , '$password')";
        $result = mysqli_query($conn , $query);
        if($result){
            $_SESSION['email'] = $email;
            $_SESSION['success'] = 'Your account is created.';
            header('Location: ../../adminAfterLogin.php');
        }
    }
    //if user already exists
    else{
        echo 'User already Exists'; 
    }
   
   
?>