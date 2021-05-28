<! -- This is inlcudes/required databases and links -->
  <html>
   <head> 
   <?php 
   session_start();
   include '../database/db.php';
   $query = "SELECT * FROM booktable";
   $result = mysqli_query($conn,$query);
?>
<?php if (isset($_GET['logout']))
{
session_destroy();
unset($_SESSION['admin_uname']);
header("location: ../index.php");
}
?>
       <link rel='stylesheet' type='text/css' href='admin.css' />
       <link rel='stylesheet' type='text/css' href='../src/css/ui.css' />
   </head>
   <body>
       <section class ="header">
      <h3>Admin Panel Biach </h3>
      <h4>Welcome <?php echo $_SESSION['admin_uname'] ?></h4>
      <form action="adminAfterLogin.php" method="GET">
      <button class="available" name="logout"> 
       Logout 
      </button>
      </form>
   
   </section>
   
       <!-- This will be Admin Panel  -->
     <section class="wrap-table">
       <table>
           <tr class="head-wrap">
             <th class ="table-head">Name</th>
             <th class ="table-head">Time</th>
             <th class ="table-head">-</th>
           </tr>
        
           <?php while($data = mysqli_fetch_assoc($result)){ ?>
             <?php echo"
             <tr class='row-wrap'>
               <td class ='table-row'> ".$data['bookername']." </td>
               <td class ='table-row'> ".$data['time']."</td>
               <td class ='table-row'> <a class='button-danger' href='cancel.php?Ctime=$data[time]'>Cancel</a> </td>
             </tr> "
             ?>
           <?php } ?>
         </table>
           </section>
   </body>
   
   </html>

