<?php
session_start();
include ('../database/db.php');
if(!isset($_SESSION['role']) or $_SESSION['role'] !='admin'){
    header('Location: /futsa/index.php');
}
else{
    $sql = "SELECT * FROM owner_pending";
    $query = mysqli_query($conn, $sql);

    if(isset($_POST['cancel'])){
        $id = $_POST['id'];
        $cancel = "DELETE FROM owner_pending WHERE id='$id'";
        $cancel_query = mysqli_query($conn, $cancel);
        header('Location: /futsa/adminPanel/master_admin.php');
    }

    if(isset($_POST['approve'])){
        $name = $_POST['name'];
        $password =md5($_POST['pwd']);
        $email = $_POST['email'];
        $add = $_POST['add'];
        $phone = $_POST['phone'];
        $image = $_POST['image'];
        $futsalName = $_POST['futsalname'];
    
    
        $user_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
         $result = mysqli_query($conn, $user_check_query);
         $user = mysqli_fetch_assoc($result);
         
         //if user doesn't exists
         if(!$user){
            $query = "INSERT INTO user Values ('','$name' , '$email' , '$password' ,  '$add' , '$phone', 'owner')";
            $result = mysqli_query($conn , $query);
            if($result){
                $query2 = "INSERT INTO futsal Values ('','$futsalName' , '$name' , '$add' ,  '$phone' , '$image')";
                $result2 = mysqli_query($conn , $query2);
                $id = $_POST['id'];
                $remove_query = "DELETE FROM owner_pending WHERE id='$id'";
                $final = mysqli_query($conn, $remove_query);
                header('Location: /futsa/adminPanel/master_admin.php');
            }
         } else {
             
             echo('Email already exists');
         }

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='admin.css' />
    <link rel='stylesheet' type='text/css' href='/futsa/futsalowners/futsalowner.css' />
    <link rel='stylesheet' type='text/css' href='/futsatemplates/index.css' />
    <link rel='stylesheet' type='text/css' href='/futsa/src/css/ui.css' />
    <title>Admin </title>
</head>
<body>
    <section>
            <div class="first-section-user">
                <div class="user-name">
                    <img src="/futsa/images/admin.png" alt="A">
                    <h1>Welcome <?php echo $_SESSION['name'] ?></h1>
                    <h2>Approval Pending!</h2>
                </div>
            </div>
    </section>
    <div class="body-lists">
    <?php foreach($query as $res){ ?>
        <div class="card">
                <img src=<?php echo $res['image']; ?> alt=" Avatar" style="width:100%">
                <hr>
                <div class="card-container">
                    <h2><?php echo $res['futsal_name']; ?></h2>
                    <div class="loc">
                        <img src="/futsa/images/location.png" alt="A">
                        <p><?php echo $res['address']; ?></p>
                    </div>
                    <div class="loc">
                        <img src="/futsa/images/phicon.png" alt="A">
                        <p><?php echo $res['phone_no']; ?></p>
                    </div>
                    <div class="loc">
                        <img src="/futsa/images/admin.png" alt="A">
                        <p><?php echo $res['name']; ?></p>
                    </div>
                    <div class="btn-lists">
                        <form method="POST" action="">
                            <input name="id" value="<?php echo $res['id']; ?>" hidden>
                            <input name="name" value="<?php echo $res['name']; ?>" hidden>
                            <input name="email" value="<?php echo $res['email']; ?>" hidden>
                            <input name="pwd" value="<?php echo $res['password']; ?>" hidden>
                            <input name="phone" value="<?php echo $res['phone_no']; ?>" hidden>
                            <input name="add" value="<?php echo $res['address']; ?>" hidden>
                            <input name="futsal" value="<?php echo $res['futsal_name']; ?>" hidden>
                            <input name="image" value="<?php echo $res['image']; ?>" hidden>
                            <button class="available" name='approve'>Approve</button>
                        </form>
                        <form method="POST" action="">
                            <input name="id" value="<?php echo $res['id']; ?>" hidden>
                            <button class="booked" name='cancel'>Cancel</button>
                        </form>
                    </div>

                </div>
        </div>
    <?php } ?>
    </div>
   

    
</body>
</html>