<?php
// database connection code
//$con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$txtName = $_POST['txtName'] ?? "";
$txtEmail = $_POST['txtEmail'] ?? "";
$subject = $_POST['subject'] ?? "";
$txtMsg = $_POST['txtMsg']?? "";

// database insert SQL code

$sql = "INSERT INTO `contact` (`id`, `db_name`, `db_email`, `db_subject`, `db_msg`) VALUES ('0', '$txtName','$txtEmail', '$subject', '$txtMsg')";

// insert in database 

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo '<script>alert("Contact details are uploaded in db")</script>';
}

?>