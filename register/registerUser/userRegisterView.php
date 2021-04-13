<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a register page of user</title>
</head>
<body>
    <form method="POST" action="userRegisterBack.php">
    <div class="fullname">
    <label >Fullname</label>
     <input type="text" name='fullname' placeholder="Enter Your Fullname" />
    </div>
    <div class="email">
     <label >Email</label>
     <input type="email" name='email' placeholder="Enter Your email id" />
    </div>
     <div class="password">
    <label>Password</label>
    <input type="password" name='password' placeholder="Enter Your password" /> 
    </div>
    <div>
        <label>Address:</label>
        <input type="text" name='address' placeholder="Enter Your address" />
    </div>
     
     
     <div class="phonenum">
         <label>Phone Number</label>
            `<input type="text" name='phonenum' placeholder="Enter Your phonenum" />
     </div>
   
    <div class="refrence"><a href="../../login/userLoginView.php"> Already Registred ?</a></div>
    
    </form>

</body>
</html>