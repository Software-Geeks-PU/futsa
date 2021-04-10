<link type="text/css" href="../src/css/userRegister.css" rel="stylesheet" >
<link type="text/css" href="../templates/index.css" rel="stylesheet" >

<?php
include '../templates/header.php' 
?>
<div class="form-container">

   <form action="">
        <div class="header"><h2>loginBox</h2></div>

        <div class= "input">
           <label for="label">Username</label>
           <input type="Text" class="input" name="UserName" placeholder="UserName" required/>  
        </div>
        
        <div class= "input">
          <label for="label">Password</label>
           <input type="Text" class="input" name="Password" placeholder="Password" required/>
        </div>

        <div class="button-success loginButton">CLick Me</div>

        <div>
          <a href="#"><i>Create account</i></a>
          <a href="#"><i>forgot Password</i></a>
        </div>
   </form>
</div>
<?php
include '../templates/footer.php' 
?>
