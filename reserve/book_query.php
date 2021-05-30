<?php
    include('C:\xampp\htdocs\futsa\database\db.php');

    $sql = "SELECT * FROM book_time";
    $query = mysqli_query($conn, $sql);

    // booking query
    $futsal_id = $_GET['futsal_id'];
    $sql_booking = "SELECT * FROM booking where futsal_id='$futsal_id' AND status = 'pending'";
    $booking_query = mysqli_query($conn, $sql_booking);
    $myhashmap = array();
    foreach($booking_query as $q){
        $myhashmap[$q['book_time_id']] = $q['book_time_id'];
    }
    
    //booked query
    $bookedMap = array();
    $sql_booking_booked = "SELECT * FROM booking where futsal_id='$futsal_id' AND status = 'booked'";
    $booked_query = mysqli_query($conn, $sql_booking_booked);

    foreach($booked_query as $q){
        $bookedMap[$q['book_time_id']] = $q['book_time_id'];
    }

?>