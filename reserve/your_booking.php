<! -- This is inlcudes/required databases and links -->
  <html>
   <head> 
   <?php 

   session_start();
   include '../database/db.php';
   $id = $_SESSION['id'];
   $sql_booking = "select futsal_name,date, book_time, status from booking as b inner join user as u on b.booker_id = u.id inner join book_time as bt on b.book_time_id = bt.book_time_id inner join futsal as f on b.futsal_id = f.futsal_id where u.id = '$id'";
   $query = mysqli_query($conn, $sql_booking);
?>

      <link rel='stylesheet' type='text/css' href='/futsa/adminPanel/admin.css' />
      <link rel="stylesheet" href="/futsa/reserve/book.css">

       <link rel='stylesheet' type='text/css' href='../src/css/ui.css' />
   </head>
   <body>
   <section>
        <div class="first-section-user">
            <div class="user-name">
                <img src="/futsa/images/admin.png" alt="A">
                <h1>Welcome <?php echo $_SESSION['name'] ?></h1>
            </div>
        </div>
    </section>
   
       <!-- This will be Admin Panel  -->
     <section class="wrap-table">
       <table>
           <tr class="head-wrap">
             <th class ="table-head">Name</th>
             <th class ="table-head">Time</th>
             <th class ="table-head">Status</th>
             <th class ="table-head">Date</th>

           </tr>
           <?php foreach($query as $q){  ?>
             <?php echo"
             <tr class='row-wrap'>
               <td class ='table-row'> ".$q['futsal_name']." </td>
               <td class ='table-row'> ".$q['book_time']."</td>
               <td class ='table-row'> ".$q['status']."</td>
               <td class ='table-row'> ".$q['date']."</td>


               </tr> "
             ?>
            <?php } ?>
         </table>
           </section>
   </body>
   
   </html>

