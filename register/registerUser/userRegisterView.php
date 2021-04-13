<html>
<head>
<link type="text/css" href="../../src/css/userRegister.css" rel="stylesheet" >
<link type="text/css" href="../../src/css/ui.css" rel="stylesheet" >

</head>

<body>
   
<div class="form-container">
   <div class="inside-form-container">
   <form action="userRegisterBack.php" method= "POST">
        <div class="header"><h2>Registration</h2></div><br>
      
        <div class= "">
           <input type="Text" class="input" name="fullName" placeholder="Full Name" required/>  
        </div>
        <br />

        <div class= "">
        <input type="text" class="input" name="email" placeholder="Email" required/>
        </div>
         <br />

        <div class= "">
        <input type="password" class="input" name="password" placeholder="Password" required/>
        </div>
         <br />

         <div class= "">
        <input type="text" class="input" name="address" placeholder="Address" required/>
        </div>
         <br />

         <div class= "">
        <input type="text" class="input" name="phonenum" placeholder="Phone Number" required/>
        </div>
         <br />

<hr/>
         <input class="button-success loginButton" type= "submit" name = "register"><hr/>
         <br/>
          <a href="#"><i>Already Have an Account?</i></a><br />
          <a href="#"><i>forgot Password</i></a>
        </div>
        

   </form>
   </div>
</div>
</body>
</html>