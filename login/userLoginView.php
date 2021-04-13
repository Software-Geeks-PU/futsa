<html>

<head>
    <link type="text/css" href="../src/css/ui.css" rel="stylesheet">
    <link rel="stylesheet" href="userLogin.css" type="text/css">
</head>

<body>
    <div class="form-container">
        <div class="logo-message">
            <div class="images-logo">
                <a href="../index.php"><img src='../src/images/logo.png' /></a>
                <p>Connect with futsal and footballers</br> around you on Futsa.</p>
            </div>
        </div>
        <div class="inside-form-container">
            <form action="userLoginBack.php" method="post">
                <input type="text" name="email" placeholder="Email" required /> <br />
                <input type="password" name="password" placeholder="Password" required />
                <input type='submit' name='submit' class="button-success" />

                <div class='forget-create'>
                    <a href="../register/registerUser/userRegisterView.php"><i>Create your account </i></a><br />
                    <a href="#"><i>Forgot Password ?</i></a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>