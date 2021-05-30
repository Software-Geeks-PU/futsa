<?php 
   session_start();
   require '../../database/db.php';

?>

<?php 
if(isset($_POST['register'])){

    $name = $_POST['fullName'];
    $password =md5($_POST['password']);
    $email = $_POST['email'];
    $add = $_POST['address'];
    $phone = $_POST['phonenum'];
    $image = $_POST['image'];
    $futsalName = $_POST['futsalname'];


    $user_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
     $result = mysqli_query($conn, $user_check_query);
     $user = mysqli_fetch_assoc($result);
     
     //if user doesn't exists
     if(!$user){
        $query = "INSERT INTO owner_pending Values ('','$name' , '$email' , '$password' ,  '$add' , '$phone', '$futsalName', '$image')";
        $result = mysqli_query($conn , $query);
        if($result){
            echo "Your Futsal Center has been sent to admin for approval, we will contact you shortly!";
        }
     } else {
         
         echo('Email already exists');
     }
    }



   
   
?>