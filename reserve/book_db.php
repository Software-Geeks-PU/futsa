<?php

error_reporting(0);
include 'database/db.php';

$result = mysqli_query($conn,"SELECT * FROM booktable WHERE time='6:00-7:00'");
$data1=mysqli_fetch_array($result);
if($data1['time'] === "6:00-7:00" && $data1['flag']== 1){
    $status1="Requested";
}
elseif ($data1['time'] === "6:00-7:00" && $data1['flag']== 2) {
    $status1="Booked";
}
else{
    $status1="Available";
}



$result2 = mysqli_query($conn,"SELECT time FROM booktable WHERE time='7:00-8:00'");
$data2=mysqli_fetch_array($result2);
if($data2['time'] === '7:00-8:00'){
    $status2="Requested";
}
else{
    $status2="Available";
}

$result3 = mysqli_query($conn,"SELECT time FROM booktable WHERE time='8:00-9:00'");
$data3=mysqli_fetch_array($result3);
if($data3['time'] === '8:00-9:00'){
    $status3="Requested";
}
else{
    $status3="Available";
}

$result4 = mysqli_query($conn,"SELECT time FROM booktable WHERE time='9:00-10:00'");
$data4=mysqli_fetch_array($result4);
if($data4['time'] === '9:00-10:00'){
    $status4="Requested";
}
else{
    $status4="Available";
}

$result5 = mysqli_query($conn,"SELECT time FROM booktable WHERE time='10:00-11:00'");
$data5=mysqli_fetch_array($result5);
if($data5['time'] === '10:00-11:00'){
    $status5="Requested";
}
else{
    $status5="Available";
}

$result6 = mysqli_query($conn,"SELECT time FROM booktable WHERE time='11:00-12:00'");
$data6=mysqli_fetch_array($result6);
if($data6['time'] === '11:00-12:00'){
    $status6="Requested";
}
else{
    $status6="Available";
}

$result7 = mysqli_query($conn,"SELECT time FROM booktable WHERE time='12:00-1:00'");
$data7=mysqli_fetch_array($result7);
if($data7['time'] === '12:00-1:00'){
    $status7="Requested";
}
else{
    $status7="Available";
}

$result8 = mysqli_query($conn,"SELECT time FROM booktable WHERE time='1:00-2:00'");
$data8=mysqli_fetch_array($result8);
if($data8['time'] === '1:00-2:00'){
    $status8="Requested";
}
else{
    $status8="Available";
}

$result9 = mysqli_query($conn,"SELECT time FROM booktable WHERE time='2:00-3:00'");
$data9=mysqli_fetch_array($result9);
if($data9['time'] === '2:00-3:00'){
    $status9="Requested";
}
else{
    $status9="Available";
}

$result10 = mysqli_query($conn,"SELECT time FROM booktable WHERE time='3:00-4:00'");
$data10=mysqli_fetch_array($result10);
if($data10['time'] === '3:00-4:00'){
    $status10="Requested";
}
else{
    $status10="Available";
}

$result11 = mysqli_query($conn,"SELECT time FROM booktable WHERE time='4:00-5:00'");
$data11=mysqli_fetch_array($result11);
if($data11['time'] === '4:00-5:00'){
    $status11="Requested";
}
else{
    $status11="Available";
}

$result12 = mysqli_query($conn,"SELECT time FROM booktable WHERE time='5:00-6:00'");
$data12=mysqli_fetch_array($result12);
if($data12['time'] === '5:00-6:00'){
    $status12="Requested";
}
else{
    $status12="Available";
}


?>