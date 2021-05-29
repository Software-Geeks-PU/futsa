<?php if (isset($_POST['logout']))
{
session_destroy();
header("location: /futsa/login/userLogin/userLoginView.php");
}
?>

<html lang="en">

<head>
    <link href="/futsa/src/css/ui.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='/futsa/templates/index.css' type=text/css rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <title>FUTSA</title>
</head>


<body>
    <!--navigation bar  -->
    <header>
        <div class="nav-bar">
            <div class="logo">
                <img src='/futsa/src/images/logo.png' />
                <p><span class="t-logo">FUTSA</span></p>
            </div>
            <div class="left-header">

                <?php if (isset($_SESSION['email'])){ ?>
                <form method="POST" action="">
                    <button class="available" name='logout'>Logout</button>
                </form>
                <?php }else{ ?>
                    <a href="/futsa/login/userLogin/userLoginView.php">Login</a>
                    </a>
                    <a href="/futsa/register/registerUser/userRegisterView.php">Register</a>
                <?php } ?>
                <?php if(isset($_SESSION['role'])  and $_SESSION['role']=='owner'){ ?>
                    <a href="/futsa/adminPanel/adminAfterLogin.php">Admin</a>
                <?php }?>
            </div>
        </div>
    </header>