<! -- This is inlcudes/required databases and links -->

<?php 
   session_start();
   include 'database/db.php';
?>
<?php 
   $query = "SELECT * FROM booktable";
   $result = mysqli_query($conn,$query);
   
?>

<html>
<head> 
</head>
<body>
    <div class ="ABC">
   <h3>Admin Panel Biach </h3>
   <h4>Welcome <?php echo $_SESSION['admin_uname'] ?></h4>
    </div>

    <!-- This will be Admin Panel  -->
  <div>
    <table>
      <tr>
        <th>Name</th>
        <th>Time</th>
        <th>-</th>
      </tr>
      
      <?php while($data = mysqli_fetch_assoc($result)){ ?>
        <?php echo"
        <tr>
          <td> ".$data['bookername']." </td>
          <td> ".$data['time']."</td>
          <td> <a href='cancel.php?Ctime=$data[time]'>Cancel</a> </td>
        </tr> "
        ?>
      <?php } ?>
    </table>
  </div>
</body>

</html>