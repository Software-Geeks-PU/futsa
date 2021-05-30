<?php
    session_start();
    if(isset($_SESSION['email'])){
        header('Location: /futsa/index.php');
    }
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link type="text/css" href="../../src/css/ui.css" rel="stylesheet">
    <link rel="stylesheet" href="../userLogin.css" type="text/css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="form-container">
        <div class="logo-message">
            <div class="images-logo">
                <a href="../../index.php"><img src='../../src/images/logo.png' /></a>
                <p>Connect with futsals and footballers</br> around you on Futsa.</p>
            </div>
        </div>
        <div class="inside-form-container">
            <form action="userLoginBack.php" method="POST">
                <input type="text" name="email" placeholder="Email" required /> <br />
                <input type="password" name="password" placeholder="Password" required />
                <input type='submit' name='submit' class="button-success" />

                <div class='forget-create'>
                    <a href="../../register/registerUser/userRegisterView.php"><i>Create your account </i></a><br />
                    <a href="#"><i>Forgot Password ?</i></a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>