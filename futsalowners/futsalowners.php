<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to FUTSA</title>
</head>

<body>
    .
    <div class="body-lists">
        <?php 
        include 'database/db.php';
        $selectQuery = "SELECT * from futsal  ";
        $query = mysqli_query($conn , $selectQuery);
        $nums = mysqli_num_rows($query);
        while($res = mysqli_fetch_array($query)){
        ?>
        <div class="card">
            <img src=<?php echo $res['images']; ?> alt=" Avatar" style="width:100%">
            <hr>

            <div class="card-container">
                <h2><?php echo $res['futsal_name']; ?></h2>
                <div class="loc">
                    <img src="images/location.png" alt="A">
                    <p><?php echo $res['address']; ?></p>
                </div>
                <div class="loc">
                    <img src="images/phicon.png" alt="A">
                    <p><?php echo $res['phone_no']; ?></p>
                </div>
                <div class="btn-lists">
                    <a href="afterlogin.php?futsal_id=<?php echo($res['futsal_id']) ?>">
                        <div class="book-btn">Book Now</div>
                    </a>
                    <div class="book-btn call-now">Call Now</div>
                </div>

            </div>
        </div>
        <?php
                    }
    ?>
    </div>
</body>

</html>