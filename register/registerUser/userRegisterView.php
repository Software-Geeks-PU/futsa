<html>
<head>
<link type="text/css" href="../../src/css/userRegister.css" rel="stylesheet" >
<link type="text/css" href="../../src/css/ui.css" rel="stylesheet" >
</head>
<body>  
<div class="form-container">
   <div class="inside-form-container">
   <form action="userRegisterBack.php" method= "POST">
       <div class='images-logo'><img src = "../../src/images/logo.png"/> </div>
        <div class="header"><h2>Create your account</h2></div><br>
           <input type="Text"  name="fullName" placeholder="Full Name" required/> <br />
           <input type="text"  name="email" placeholder="Email address" required/><br />
           <input type="password" name="password" placeholder="Password" required/><br />
           <input type="text"  name="address" placeholder="Address" required/><br />
           <input type="text" name="phonenum" placeholder="Phone Number" required/><br />
           <input class="button-success" type= "submit" name ="register"><br/> <br/><br/><hr/>
          <br/> 
          <a href="#"><i>Already Have an Account?</i></a><br />
          <a href="#"><i>Forgotten Password?</i></a>
        </div>
   </form>
   </div>
</div>
</body>
</html>