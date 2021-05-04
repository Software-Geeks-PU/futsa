<! -- This is inlcudes/required databases and links -->

<?php 
   session_start();
   include '../database/db.php';
?>
<?php 
   $query = "SELECT * FROM booktable";
   $result = mysqli_query($conn,$query);
   
?>

<html>
<head> 
    <link rel='stylesheet' type='text/css' href='admin.css' />
    <link rel='stylesheet' type='text/css' href='../src/css/ui.css' />
</head>
<body>
    <section class ="header">
   <h3>Admin Panel Biach </h3>
   <h4>Welcome <?php echo $_SESSION['admin_uname'] ?></h4>
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