<?php include "reserve/book_db.php"; ?>
<?php include "reserve/userdetails.php"; ?>

<?php
if(isset($_POST['bookingTime']))
{
    $time= $_POST['bookingTime'];
    $first="INSERT INTO booktable (id, bookername, time) VALUES('$u_id','$u_name','$time')";
    $result_1=mysqli_query($conn,$first);
    if($result_1)
        {
             

        }    
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="try.css">
    <script>
    function display() {
        return confirm("Are u sure u want to book the game");
    }
    </script>
    <link rel="shortcut icon" type="image/png" href="./images/fav.png" />
    <title>Book</title>
</head>

<body>
    <header>
        <div class="header_box">
            <div class="logo">
                <h1><span class="hightlight">FUT</span>SA</h1>
            </div>
            <nav>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="">
                        <?php
                        echo "<h5>";
                        echo "$u_name";
                        echo "</h5>";
                        $query= "SELECT name ,time FROM booktable where name='".$_SESSION['u_name']."'";
                        $data=mysqli_query($conn,$query);
                        $total=mysqli_num_rows($query);
                        if ($total!==0){
                        while ($result = mysqli_fetch_assoc($data)){
                        echo "<table style=\"color:white;
                        margin-left:0px;
                        border-radius:0px;
                        font-size:15px;\"
                        >
                        <tr>
                        <td>".$result['time']."</td>
                        </tr>
                        </table>";
                            }
                        }
                    ?>
                    </a>
                </div>


                <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "250px";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
                </script>
                <script>
                <!--
                function timedRefresh(timeoutPeriod) {
                    setTimeout("location.reload(true);", timeoutPeriod);
                }
                //   
                -->
                </script>
                <nav>
                    <ul>
                        <li class="reserve"><span style="cursor:pointer;" onclick="openNav()"> My Reservations</span>
                        </li>
                        </li>
                        <li><a href="index.php">LogOut</a></li>
                    </ul>
                </nav>
        </div>
    </header>
    <section>
        <h1 class="available-heading">
            Available Time
        </h1>
        <div class="availabletime">
            <table>
                <tr class="table-heading">
                    <th>Time</th>
                    <th class="status">Status</th>
                </tr>
                <tr>
                    <td align="center">6:00 - 7:00 AM</td>
                    <td align="center">
                        <form onsubmit="return display()" method="post" action="afterLogin.php">
                            <input type="hidden" name="bookingTime" value="6:00-7:00">
                            <button class="available<?php if ($status1 == "Booked") echo 'available2'; ?>" type="submit"
                                id="6-7"><?php echo"$status1";?></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>7:00 - 8:00 AM</td>
                    <td align="center">
                        <form onsubmit="return display()" method="post" action="afterLogin.php">
                            <input type="hidden" name="bookingTime" value="7:00-8:00">
                            <button class="available<?php if ($status2 == "Booked") echo 'available2'; ?>" type="submit"
                                id="7-8"><?php echo"$status2";?></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>8:00 - 9:00 AM</td>
                    <td align="center">
                        <form onsubmit="return display()" method="post" action="afterLogin.php">
                            <input type="hidden" name="bookingTime" value="8:00-9:00">
                            <button class="available<?php if ($status3 == "Booked") echo 'available2'; ?>" type="submit"
                                id="8-9" value="8:00-9:00"><?php echo"$status3";?></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>9:00 - 10:00 AM</td>
                    <td align="center">
                        <form onsubmit="return display()" method="post" action="afterLogin.php">
                            <input type="hidden" name="bookingTime" value="9:00-10:00">
                            <button class="available<?php if ($status4 == "Booked") echo ' available2'; ?>"
                                type="submit" id="9-10" value="9:00-10:00"><?php echo"$status4";?></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>10:00 - 11:00 AM</td>
                    <td align="center">
                        <form onsubmit="return display()" method="post" action="afterLogin.php">
                            <input type="hidden" name="bookingTime" value="10:00-11:00">
                            <button class="available<?php if ($status5 == "Booked") echo ' available2'; ?>"
                                type="submit" id="10-11" value="10:00-11:00"><?php echo"$status5";?></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>11:00 - 12:00 AM</td>
                    <td align="center">
                        <form onsubmit="return display()" method="post" action="afterLogin.php">
                            <input type="hidden" name="bookingTime" value="11:00-12:00">
                            <button class="available<?php if ($status6 == "Booked") echo ' available2'; ?>"
                                type="submit" id="11-12" value="11:00-12:00"><?php echo"$status6";?></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>12:00 - 1:00 PM</td>
                    <td align="center">
                        <form onsubmit="return display()" method="post" action="afterLogin.php">
                            <input type="hidden" name="bookingTime" value="12:00-1:00">
                            <button class="available<?php if ($status7 == "Booked") echo ' available2'; ?>"
                                type="submit" id="12-1" value="12:00-1:00"><?php echo"$status7";?></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>1:00 - 2:00 PM</td>
                    <td align="center">
                        <form onsubmit="return display()" method="post" action="afterLogin.php">
                            <input type="hidden" name="bookingTime" value="1:00-2:00">
                            <button class="available<?php if ($status8 == "Booked") echo ' available2'; ?>"
                                type="submit" id="1-2" value="1:00-2:00"><?php echo"$status8";?></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>2:00 - 3:00 PM</td>
                    <td align="center">
                        <form onsubmit="return display()" method="post" action="afterLogin.php">
                            <input type="hidden" name="bookingTime" value="2:00-3:00">
                            <button class="available<?php if ($status9 == "Booked") echo ' available2'; ?>"
                                type="submit" id="2-3" value="2:00-3:00"><?php echo"$status9";?></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>3:00 - 4:00 PM</td>
                    <td align="center">
                        <form onsubmit="return display()" method="post" action="afterLogin.php">
                            <input type="hidden" name="bookingTime" value="3:00-4:00">
                            <button class="available<?php if ($status10 == "Booked") echo ' available2'; ?>"
                                type="submit" id="3-4" value="3:00-4:00"><?php echo"$status10";?></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>4:00 - 5:00 PM</td>
                    <td align="center">
                        <form onsubmit="return display()" method="post" action="afterLogin.php">
                            <input type="hidden" name="bookingTime" value="4:00-5:00">
                            <button class="available<?php if ($status11 == "Booked") echo ' available2'; ?>"
                                type="submit" id="4-5" value="4:00-5:00"><?php echo"$status11";?></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>5:00 - 6:00 PM</td>
                    <td align="center">
                        <form onsubmit="return display()" method="post" action="afterLogin.php">
                            <input type="hidden" name="bookingTime" value="5:00-6:00">
                            <button class="available<?php if ($status12 == "Booked") echo ' available2'; ?>"
                                type="submit" id="5-6" value="5:00-6:00"><?php echo"$status12";?></button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <footer style="margin-top:1rem;">
        <p>FUTSA , &copy;2020</p>
    </footer>
</body>

</html>