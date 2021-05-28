<html>

<head>
    <link type="text/css" href="../registerUser/userRegister.css" rel="stylesheet">
    <link type="text/css" href="../../src/css/ui.css" rel="stylesheet">
</head>

<body>
    <div class="form-container">
        <div class="inside-form-container">
            <form action="adminRegisterBack.php" method="POST">
                <!-- <?php //include("../../error.php"); ?>  -->
                <div class='images-logo'><a href="../../index.php"><img src="../../src/images/logo.png" /></a> </div>
                <div class="header">
                    <h2>Register admin</h2>
                </div><br>
                <input type="Text" name="admin_uname" placeholder="Username" required /> <br />
                <input type="password" name="password" placeholder="Password" required /><br />
                
                <input class="button-success" type="submit" name="register"><br /> <br /><br />
                <br />
                <a href="../../login/adminLogin/adminLoginView.php"><i>Already Have an Account ?</i></a><br />
                <a href="#"><i>Forgotten Password ?</i></a>
        </div>
        </form>
    </div>
    </div>
</body>

</html>