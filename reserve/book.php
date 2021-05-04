<!DOCTYPE html>
<html lang="en">
<?php include 'book_db.php'; ?>
<?php if (isset($_GET['logout']))
{
session_destroy();
unset($_SESSION['email']);
header("location: login/userLogin/userLoginView.php");
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reserve/book.css">
    <script>
    function display() {
        return confirm("Are u sure u want to book the game");
        header('location: afterlogin.php');
    }
    </script>
    <link rel="shortcut icon" type="image/png" href="./images/fav.png" />
    <title>Book</title>
</head>

<body>
    <header>
        <nav>
            <div class="header-box">
                <div class="logo">
                    <img src="src/images/logo.png" alt="futsa" />
                    <h1>FUT<span class="highlight">SA</span></h1>
                </div>


                <h3>Welcome <?php echo $_SESSION['email'] ?></h3>
                <form method="get" action="afterLogin.php">
                    <button class="available" name='logout'>Logout</button>
                </form>


            </div>
        </nav>
    </header>

    <section>
        <div class="booking-table">
            <h1 class="available-heading">
                <span>Available Time</span>
                <div class="hdesign-green"></div>
            </h1>
            <div class="availabletime">
                <div class="booking-cards">
                    <!-- <tr class="table-heading">
                        <th>Time</th>
                        <th class="status">Status</th>
                    </tr> -->
                    <div class="card">
                        <div class="time <?php if ($status1 == "Booked") echo ' available2';?>" align="center">
                            <h2>6:00 -7:00 AM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="6:00-7:00">
                                <button class="available<?php if ($status1 == "Booked") echo ' available2';?>"
                                    type="submit" id="6-7"><?php echo"$status1";?></button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="time <?php if ($status2 == "Booked") echo ' available2';?>" align="center">
                            <h2>7:00 -8:00 AM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="7:00-8:00">
                                <button class="available<?php if ($status2 == "Booked") echo ' available2';?>"
                                    type="submit" id="7-8"><?php echo"$status2";?></button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="time <?php if ($status3 == "Booked") echo ' available2';?>" align="center">
                            <h2>8:00 -9:00 AM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="8:00-9:00">
                                <button class="available<?php if ($status3 == "Booked") echo ' available2';?>"
                                    type="submit" id="8-9"><?php echo"$status3";?></button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="time <?php if ($status4 == "Booked") echo ' available2';?>" align="center">
                            <h2>9:00 -10:00 AM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="9:00-10:00">
                                <button class="available<?php if ($status4 == "Booked") echo ' available2';?>"
                                    type="submit" id="9-10"><?php echo"$status4";?></button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="time <?php if ($status5 == "Booked") echo ' available2';?>" align="center">
                            <h2>10:00 -11:00 AM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="10:00-11:00">
                                <button class="available<?php if ($status5 == "Booked") echo ' available2';?>"
                                    type="submit" id="10-11"><?php echo"$status5";?></button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="time <?php if ($status6 == "Booked") echo ' available2';?>" align="center">
                            <h2>11:00 -12:00 AM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="11:00-12:00">
                                <button class="available<?php if ($status6 == "Booked") echo ' available2';?>"
                                    type="submit" id="11-12"><?php echo"$status6";?></button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="time <?php if ($status7 == "Booked") echo ' available2';?>" align="center">
                            <h2>12:00 -1:00 PM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="12:00-1:00">
                                <button class="available<?php if ($status7 == "Booked") echo ' available2';?>"
                                    type="submit" id="12-1"><?php echo"$status7";?></button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="time <?php if ($status8 == "Booked") echo ' available2';?>" align="center">
                            <h2>1:00 -2:00 PM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="1:00-2:00">
                                <button class="available<?php if ($status8 == "Booked") echo ' available2';?>"
                                    type="submit" id="1-2"><?php echo"$status8";?></button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="time <?php if ($status9 == "Booked") echo ' available2';?>" align="center">
                            <h2>2:00 -3:00 PM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="2:00-3:00">
                                <button class="available<?php if ($status9 == "Booked") echo ' available2';?>"
                                    type="submit" id="2-3"><?php echo"$status9";?></button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="time <?php if ($status10 == "Booked") echo ' available2';?>" align="center">
                            <h2>3:00 -4:00 PM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="3:00-4:00">
                                <button class="available<?php if ($status10 == "Booked") echo ' available2';?>"
                                    type="submit" id="3-4"><?php echo"$status10";?></button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="time <?php if ($status11 == "Booked") echo ' available2';?>" align="center">
                            <h2>4:00 -5:00 PM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="4:00-5:00">
                                <button class="available<?php if ($status11 == "Booked") echo ' available2';?>"
                                    type="submit" id="4-5"><?php echo"$status11";?></button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="time <?php if ($status12 == "Booked") echo ' available2';?>" align="center">
                            <h2>5:00 -6:00 PM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="5:00-6:00">
                                <button class="available<?php if ($status12 == "Booked") echo ' available2';?>"
                                    type="submit" id="5-6"><?php echo"$status12";?></button>
                            </form>
                        </div>
                    </div>

    </section>
    <!-- <footer style="margin:auto">
        <p>FUTSA , &copy;2020</p>
    </footer> -->
</body>

</html>