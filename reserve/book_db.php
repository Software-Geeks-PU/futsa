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



$result2 = mysqli_query($conn,"SELECT * FROM booktable WHERE time='7:00-8:00'");
$data2=mysqli_fetch_array($result2);
if($data2['time'] === "7:00-8:00" && $data2['flag']== 1){
    $status2="Requested";
}
elseif ($data2['time'] === "7:00-8:00" && $data2['flag']== 2) {
    $status2="Booked";
}
else{
    $status2="Available";
}


$result3 = mysqli_query($conn,"SELECT * FROM booktable WHERE time='8:00-9:00'");
if($data3['time'] === "8:00-9:00" && $data3['flag']== 1){
    $status3="Requested";
}
elseif ($data3['time'] === "8:00-9:00" && $data3['flag']== 2) {
    $status3="Booked";
}
else{
    $status3="Available";
}



$result4 = mysqli_query($conn,"SELECT * FROM booktable WHERE time='9:00-10:00'");
$data4=mysqli_fetch_array($result4);
if($data4['time'] === "9:00-10:00" && $data4['flag']== 1){
    $status4="Requested";
}
elseif ($data4['time'] === "9:00-10:00" && $data4['flag']== 2) {
    $status4="Booked";
}
else{
    $status4="Available";
}


$result5 = mysqli_query($conn,"SELECT * FROM booktable WHERE time='10:00-11:00'");
$data5=mysqli_fetch_array($result5);
if($data5['time'] === "10:00-11:00" && $data5['flag']== 1){
    $status5="Requested";
}
elseif ($data5['time'] === "10:00-11:00" && $data5['flag']== 2) {
    $status5="Booked";
}
else{
    $status5="Available";
}

$result6 = mysqli_query($conn,"SELECT * FROM booktable WHERE time='11:00-12:00'");
$data6=mysqli_fetch_array($result6);
if($data6['time'] === "11:00-12:00" && $data6['flag']== 1){
    $status6="Requested";
}
elseif ($data6['time'] === "11:00-12:00" && $data6['flag']== 2) {
    $status6="Booked";
}
else{
    $status6="Available";
}

$result7 = mysqli_query($conn,"SELECT * FROM booktable WHERE time='12:00-1:00'");
$data7=mysqli_fetch_array($result7);
if($data7['time'] === "12:00-1:00" && $data7['flag']== 1){
    $status7="Requested";
}
elseif ($data7['time'] === "12:00-1:00" && $data7['flag']== 2) {
    $status7="Booked";
}
else{
    $status7="Available";
}

$result8 = mysqli_query($conn,"SELECT * FROM booktable WHERE time='1:00-2:00'");
$data8=mysqli_fetch_array($result8);
if($data8['time'] === "1:00-2:00" && $data8['flag']== 1){
    $status8="Requested";
}
elseif ($data8['time'] === "1:00-2:00" && $data8['flag']== 2) {
    $status8="Booked";
}
else{
    $status8="Available";
}

$result9 = mysqli_query($conn,"SELECT * FROM booktable WHERE time='2:00-3:00'");
$data9=mysqli_fetch_array($result9);
if($data9['time'] === "2:00-3:00" && $data9['flag']== 1){
    $status9="Requested";
}
elseif ($data9['time'] === "2:00-3:00" && $data9['flag']== 2) {
    $status9="Booked";
}
else{
    $status9="Available";
}

$result10 = mysqli_query($conn,"SELECT * FROM booktable WHERE time='3:00-4:00'");
if($data10['time'] === "3:00-4:00" && $data10['flag']== 1){
    $status10="Requested";
}
elseif ($data10['time'] === "3:00-4:002:00-3:00" && $data10['flag']== 2) {
    $status10="Booked";
}
else{
    $status10="Available";
}

$result11 = mysqli_query($conn,"SELECT * FROM booktable WHERE time='4:00-5:00'");
if($data11['time'] === "4:00-5:00" && $data11['flag']== 1){
    $status11="Requested";
}
elseif ($data11['time'] === "4:00-5:00" && $data11['flag']== 2) {
    $status11="Booked";
}
else{
    $status11="Available";
}

$result12 = mysqli_query($conn,"SELECT * FROM booktable WHERE time='5:00-6:00'");
$data12=mysqli_fetch_array($result12);
if($data12['time'] === "5:00-6:00" && $data12['flag']== 1){
    $status12="Requested";
}
elseif ($data12['time'] === "5:00-6:00" && $data12['flag']== 2) {
    $status12="Booked";
}
else{
    $status12="Available";
}



?>