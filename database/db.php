<?php
// This is the page to make the connection 
// to our database "futsa" in php myadmin.

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "futsa";
$conn = mysqli_connect($host, $user, $pass, $dbname) or die();
if(!$conn){
    echo("Conenction unsuccessfull !!");
}
?>