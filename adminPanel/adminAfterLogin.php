<! -- This is inlcudes/required databases and links -->
  <html>
   <head> 
   <?php 
   session_start();
   if(!isset($_SESSION['role']) or $_SESSION['role'] !='owner'){
    header('Location: /futsa/index.php');
  }
  include '../database/db.php';
   $owner = $_SESSION['name'];
   $sql_booking = "select booking_id,date, status, futsal_name, book_time, username from futsal as f inner join booking as b on f.futsal_id = b.futsal_id inner join book_time as bt on b.book_time_id = bt.book_time_id inner join user as u on b.booker_id = u.id WHERE f.owner = '$owner'";
   $query = mysqli_query($conn, $sql_booking);
?>

      <link rel='stylesheet' type='text/css' href='admin.css' />
      <link rel="stylesheet" href="/futsa/reserve/book.css">

       <link rel='stylesheet' type='text/css' href='../src/css/ui.css' />
   </head>
   <body>
<header>
<?php include('/futsa/templates/header.php');  ?>

</header>
   <section>
        <div class="first-section-user">
            <div class="user-name">
                <img src="/futsa/images/admin.png" alt="A">
                <h1>Welcome <?php echo $_SESSION['name'] ?></h1>
                <p>Please select the available time below to book.<br></p>
            </div>
        </div>
    </section>
   
       <!-- This will be Admin Panel  -->
     <section class="wrap-table">
       <table>
           <tr class="head-wrap">
             <th class ="table-head">Name</th>
             <th class ="table-head">Time</th>
             <th class ="table-head">Date</th>
             <th class ="table-head">Cancel Booking</th>

             <th class ="table-head">Confirm Booking</th>


           </tr>
           <?php foreach($query as $q){  ?>
              <?php if($q['status']=='booked' or $q['status']=='expired'){ ?>
                <?php echo"
                  <tr class='row-wrap'>
                    <td class ='table-row'> ".$q['username']." </td>
                    <td class ='table-row'> ".$q['book_time']."</td>
                    <td class ='table-row'> ".$q['date']."</td>

                    <td class ='table-row'> Booked/Expired </td>
                    </tr> "
                ?>

              <?php  }else{ ?>
                <?php echo"
             <tr class='row-wrap'>
               <td class ='table-row'> ".$q['username']." </td>
               <td class ='table-row'> ".$q['book_time']."</td>
               <td class ='table-row'> ".$q['date']."</td>

               <td class ='table-row'> <a class='button-danger' href='cancel.php?booking_id=$q[booking_id]'>Cancel</a> </td>
               <td class ='table-row'> <a class='button-primary' href='confirm.php?booking_id=$q[booking_id]'>Confirm</a> </td>
               </tr> "
             ?>

              <?php } ?>
            <?php } ?>
         </table>
           </section>
   </body>
   
   </html>

