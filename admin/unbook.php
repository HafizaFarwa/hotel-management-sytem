<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FUR Hotel</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="../styles.css">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 <header class="header">
     <div class="container">
         <nav class="nav">
             <a href="../index.html" class="logo">
                <img src="../images/12.png" alt="">
                
                <!-- <h5>FARWA</h5> -->
             </a>
             <div class="hamburger-menu">
                
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
             </div>
             <ul class="nav-list">
                 <li class="nav-items">
                     <a href="../index.html" class="nav-link">Home</a>
                 </li>
                 <li class="nav-items">
                    <a href="../index.html#hotels" class="nav-link">About</a>
                </li>
                <li class="nav-items">
                    <a href="../index.html#offer" class="nav-link">Offers</a>
                </li>
                <li class="nav-items">
                    <a href="../index.html#booking" class="nav-link">Booking</a>
                </li>
                <li class="nav-items">
                    <a href="../index.html#contact" class="nav-link">Contact Us</a>
                </li>


             </ul>
         </nav>
     </div>

 </header>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <br><br><br><br><br><br>
</head>

<?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"db_contact");
    if($_GET['rt'] == 'a'){
    	$query = "update room set holder_name = null, holder_id = null,mobile = null,address = null,child = null,adult = null,in_date = null,out_date = null,status = 0 where room_no = $_GET[rn]";
    }
    if($_GET['rt'] == 'b'){
        $query = "update single_ac set holder_name = null, holder_id = null,mobile = null,address = null,child = null,adult = null,in_date = null,out_date = null,status = 0 where room_id = $_GET[rn]";
    }
    if($_GET['rt'] == 'c'){
        $query = "update double_ac set holder_name = null, holder_id = null,mobile = null,address = null,child = null,adult = null,in_date = null,out_date = null,status = 0 where room_no = $_GET[rn]";
    
    }
    if($_GET['rt'] == 'd'){
        $query = "update double_non_ac set holder_name = null, holder_id = null,mobile = null,address = null,child = null,adult = null,in_date = null,out_date = null,status = 0 where room_no = $_GET[rn]";
    
    }
    $query_run = mysqli_query($connection,$query);
if($query_run)
{
	echo'<div class="alert alert-success alert-dismissible">
    <a href="rooms.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Unbooked!</strong> Room is free now</div>';
}
else{
    {
        echo'<div class="alert alert-danger alert-dismissible">
        <a href="rooms.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> Room is still booked</div>';
    }
    
}       
?>
<br><br><br><br><br><br>
<footer class="footer">
     <div class="container">
         <div class="footer-content">
             <div class="footer-content-brand">
                 <a href="index.html" class="logo">
                     <img src="./images/12.png" alt="" class="logo-image">
                 </a>
                 <div class="paragraph">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                     Inventore quod, necessitatibus ipsam labore pariatur aspernatur 
                     
                 </div>
             </div>

             <div class="social-media-wrap">
                 <h4 class="footer-heading">Follow us</h4>
                 <div class="social-media">
                     <a href="#" class="sm-link"><i class="fab fa-twitter"></i></a>
                     <a href="#" class="sm-link"><i class="fab fa-facebook-square"></i></a>
                     <a href="#" class="sm-link"><i class="fab fa-instagram"></i></a>
                     <a href="#" class="sm-link"><i class="fab fa-tripadvisor"></i></a>
                 </div>
             </div>
         </div>
     </div>
 </footer>
    
    
</body>
</html> 
