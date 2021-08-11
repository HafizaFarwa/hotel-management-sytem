<?php

//establishing connnection

$con = mysqli_connect('localhost', 'root', '','db_contact');
//get post record

$destination = $_POST['destination'] ?? "";
$checkIn = $_POST['check-in'] ?? "";
$checkOut = $_POST['check-out'] ?? "";
$childern = $_POST['childern']?? "";
$adults = $_POST['adults']?? "";

// database insert SQL code
$sql = "INSERT INTO `booking` (`id`, `destination`, `check-in`, `check-out`, `childern`, `adults`) VALUES ('0', '$destination','$checkIn', '$checkOut', '$childern','$adults')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo '<script>alert("Booking details are uploaded in db")</script>';
}



?>