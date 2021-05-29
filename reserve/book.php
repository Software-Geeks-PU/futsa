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
    <link rel="stylesheet" href="templates/index.css">
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
        <div class="nav-bar">
            <div class="logo">
                <img src='src/images/logo.png' />
                <a href="index.php">
                    <p><span class="t-logo">FUTSA</span></p>
                </a>
            </div>
            <div class="left-header">
                <form method="get" action="afterLogin.php">
                    <button class="available" name='logout'>Logout</button>
                </form>
                <button class="available" name='logout'>Your Bookings</button>
            </div>
        </div>
    </header>

    <section>
        <div class="first-section-user">
            <div class="user-name">
                <img src="images/admin.png" alt="A">
                <h1>Welcome <?php echo $_SESSION['email'] ?></h1>
                <p>Please select the available time below to book.<br></p>
            </div>
        </div>

    </section>
    <section>
        <div class="booking-table"> 
            <!-- This is the place for title -->
            <div class="availabletime">
                <div class="booking-cards">
                    <div class="card">
                        <div class="time <?php echo ($status1 == "Requested") ? ' available2' :(($status1 == "Booked") ? ' booked' : ''); ?>" align="center">
                            <h2>6:00 -7:00 AM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="6:00-7:00">
                                <button class="available<?php echo ($status1 == "Requested") ? ' available2' :(($status1 == "Booked") ? ' booked' : ''); ?>"
                                    type="submit" id="6-7"><?php echo"$status1";?></button>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="time <?php echo ($status2 == "Requested") ? ' available2' :(($status2 == "Booked") ? ' booked' : ''); ?> "align="center">
                            <h2>7:00 -8:00 AM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="7:00-8:00">
                                <button class="available<?php echo ($status2 == "Requested") ? ' available2' :(($status2 == "Booked") ? ' booked' : ''); ?>"
                                    type="submit" id="7-8"><?php echo"$status2";?></button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="time <?php echo ($status3 == "Requested") ? ' available2' :(($status3 == "Booked") ? ' booked' : ''); ?> "align="center">
                            <h2>8:00 -9:00 AM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="8:00-9:00">
                                <button class="available<?php echo ($status3 == "Requested") ? ' available2' :(($status3 == "Booked") ? ' booked' : ''); ?>"
                                    type="submit" id="8-9"><?php echo"$status3";?></button>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="time <?php echo ($status4 == "Requested") ? ' available2' :(($status4 == "Booked") ? ' booked' : ''); ?>" align="center">
                            <h2>9:00 -10:00 AM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="9:00-10:00">
                                <button class="available<?php echo ($status4 == "Requested") ? ' available2' :(($status4 == "Booked") ? ' booked' : ''); ?>"
                                    type="submit" id="9-10"><?php echo"$status4";?></button>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="time <?php echo ($status5 == "Requested") ? ' available2' :(($status5 == "Booked") ? ' booked' : ''); ?>" align="center">
                            <h2>10:00 -11:00 AM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="10:00-11:00">
                                <button class="available<?php echo ($status5 == "Requested") ? ' available2' :(($status5 == "Booked") ? ' booked' : ''); ?>"
                                    type="submit" id="10-11"><?php echo"$status5";?></button>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="time <?php echo ($status6 == "Requested") ? ' available2' :(($status6 == "Booked") ? ' booked' : ''); ?>" align="center">
                            <h2>11:00 -12:00 AM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="11:00-12:00">
                                <button class="available<?php echo ($status6 == "Requested") ? ' available2' :(($status6 == "Booked") ? ' booked' : ''); ?>"
                                    type="submit" id="11-12"><?php echo"$status6";?></button>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="time <?php echo ($status7 == "Requested") ? ' available2' :(($status7 == "Booked") ? ' booked' : ''); ?>" align="center">
                            <h2>12:00 -1:00 PM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="12:00-1:00">
                                <button class="available<?php echo ($status7 == "Requested") ? ' available2' :(($status7 == "Booked") ? ' booked' : ''); ?>"
                                    type="submit" id="12-1"><?php echo"$status7";?></button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="time <?php echo ($status8 == "Requested") ? ' available2' :(($status8 == "Booked") ? ' booked' : ''); ?>" align="center">
                            <h2>1:00 -2:00 PM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="1:00-2:00">
                                <button class="available<?php echo ($status8 == "Requested") ? ' available2' :(($status8 == "Booked") ? ' booked' : ''); ?>"
                                    type="submit" id="1-2"><?php echo"$status8";?></button>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="time <?php echo ($status9 == "Requested") ? ' available2' :(($status9 == "Booked") ? ' booked' : ''); ?>" align="center">
                            <h2>2:00 -3:00 PM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="2:00-3:00">
                                <button class="available<?php echo ($status9 == "Requested") ? ' available2' :(($status9 == "Booked") ? ' booked' : ''); ?>"
                                    type="submit" id="2-3"><?php echo"$status9";?></button>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="time <?php echo ($status10 == "Requested") ? ' available2' :(($status10 == "Booked") ? ' booked' : ''); ?> align="center">
                            <h2>3:00 -4:00 PM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="3:00-4:00">
                                <button class="available<?php echo ($status10 == "Requested") ? ' available2' :(($status10 == "Booked") ? ' booked' : ''); ?>"
                                    type="submit" id="3-4"><?php echo"$status10";?></button>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="time <?php echo ($status11 == "Requested") ? ' available2' :(($status11 == "Booked") ? ' booked' : ''); ?>" align="center">
                            <h2>4:00 -5:00 PM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="4:00-5:00">
                                <button class="available<?php echo ($status11 == "Requested") ? ' available2' :(($status11 == "Booked") ? ' booked' : ''); ?>"
                                    type="submit" id="4-5"><?php echo"$status11";?></button>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="time <?php echo ($status12 == "Requested") ? ' available2' :(($status12 == "Booked") ? ' booked' : ''); ?>" align="center">
                            <h2>5:00 -6:00 PM</h2>
                        </div>
                        <div align="center">
                            <form onsubmit="return display()" method="post" action="reserve/insert.php">
                                <input type="hidden" name="bookingTime" value="5:00-6:00">
                                <button class="available<?php echo ($status12 == "Requested") ? ' available2' :(($status12 == "Booked") ? ' booked' : ''); ?>"
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