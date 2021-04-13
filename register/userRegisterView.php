<<<<<<< HEAD

<link href='../templates/index.css' type=text/css rel="stylesheet"/>
<?php 
    include '../templates/header.php';
?>

<h1>someting</h1>
<form action="">
NAME:<input type="text" value="Name">  <br><br>
EMAIL:<input type="text"> <br><br>
PASSWORD<input type="text"><br><br>
ADDRESS:<input type="text"> <br><br>
PHONE:<input type="text"> <br><br>
<input type="checkbox"> Agree to all terms and condition<br><br>
<input type="button" value="Button">
<p><a href="#">Something</a></p>

</form>

<?php 
    include '../templates/footer.php';
?>
=======
<html>
<head>
<link type="text/css" href="../src/css/userRegister.css" rel="stylesheet" >
<link type="text/css" href="../src/css/ui.css" rel="stylesheet" >
<link type="text/css" href="../templates/index.css" rel="stylesheet" >
</head>

<body>
   
<div class="form-container">
   <div class="inside-form-container">
   <form action="">
        <div class="header"><h2>Registration</h2></div><br>
      
        <div class= "">
          
           <input type="Text" class="input" name="UserName" placeholder="UserName" required/>  
        </div>

        <br />

        <div class= "">
        <input type="password" class="input" name="Password" placeholder="Password" required/>
        </div>
         <br />

         <div class= "">
        <input type="password" class="input" name="text" placeholder="Phone Number" required/>
        </div>
         <br />

         <div class= "">
        <input type="password" class="input" name="text" placeholder="Address" required/>
        </div>
         <br />

        <div class="button-success loginButton">CLick Me</div>
            <br/>
        <div>
          <a href="#"><i>Already Have an Account?</i></a><br />
          <a href="#"><i>forgot Password</i></a>
        </div>
   </form>
   </div>
</div>
</body>
</html>
>>>>>>> e819b476c82041827b202be6b906350f21a4f720
