<?php
// database connection code
//$con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$name=$_POST['name']?? "";
$email = $_POST['email']?? "";
$password = $_POST['password'] ?? "";
$c_password = $_POST['c_password'] ?? "";
$check=false;
// database insert SQL code
if($c_password==$password){
	$sql = "INSERT INTO `sign-up` (`id`,`name`,`email`,`password`,`c_password`) VALUES ('0','$name','$email','$password','$c_password')";
	$sql2 = "INSERT INTO `signUp` (`id`,`email`,`password`) VALUES ('0','$email','$password')";
	$rs = mysqli_query($con, $sql);
	$rs2 = mysqli_query($con, $sql2);
		if($rs==$rs2)
		{
			header("Location:index.html");
		}
}
else{
	echo "<script>alert('Both Passwords are not same');</script>";
	$check=true;
}

?>