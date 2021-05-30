<?php
// This is the page to make the connection 
// to our database "futsa" in php myadmin.

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "futsa2";
$conn = mysqli_connect($host, $user, $pass, $dbname) or die();
if(!$conn){
    echo("Conenction unsuccessfull !!");
}

$sql = 'SELECT booking_id, date from booking';
$query = mysqli_query($conn, $sql);
foreach($query as $q)
{
    if($q['date'] != date("Y-m-d")){
        $id = $q['booking_id'];
        $update_status = "UPDATE booking SET status='expired' where booking_id='$id'";
        $set_query = mysqli_query($conn, $update_status);
    }
}

?>