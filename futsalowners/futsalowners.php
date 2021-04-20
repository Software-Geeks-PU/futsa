<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='futsalowner.css' />
    <link rel='stylesheet' type='text/css' href='../src/css/ui.css' />
    <link rel='stylesheet' type='text/css' href='../templates/index.css' />
    <title>Welcome to FUTSA</title>
</head>

<body>
    <div class="body-lists">
        <?php 
        include 'database/db.php';
        $selectQuery = "SELECT * from futsaladmin  ";
        $query = mysqli_query($conn , $selectQuery);
        $nums = mysqli_num_rows($query);
        while($res = mysqli_fetch_array($query)){
        ?>
        <div class="card">
            <img src=<?php echo $res['image']; ?> alt=" Avatar" style="width:100%">
            <div class="container">
                <h4><?php echo $res['futsalname']; ?></h4>
                <p>Address : <?php echo $res['address']; ?></p>
                <p>Phonenumber : <?php echo $res['phonenum']; ?></p>
                <a href="afterlogin.php"><button class="button-success">Book Now</button></a>
            </div>
        </div>
        <?php
    }
    ?>
    </div>
</body>

</html>