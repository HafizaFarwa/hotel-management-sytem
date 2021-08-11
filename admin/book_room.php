
<?php 
    session_start();
   if(isset($_POST['book_room'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"db_contact");
        if($_POST['room_type'] == 'Single Non-AC'){
            $query = "update room set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],
            mobile = '$_POST[holder_mobile]',address = '$_POST[holder_address]',child = $_POST[child_no],
            adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',
            status = 1 where room_no = $_GET[rn]";
        }
        if($_POST['room_type'] == 'Single AC'){
            
            $query = "update single_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],
            mobile = '$_POST[holder_mobile]',address = '$_POST[holder_address]',child = $_POST[child_no],
            adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',
            status = 1 where room_id = $_GET[rn]";
        }
        if($_POST['room_type'] == 'Double Non-AC'){
            $query = "update double_non_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],
            mobile = '$_POST[holder_mobile]',address = '$_POST[holder_address]',child = $_POST[child_no],
            adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',
            status = 1 where room_no = $_GET[rn]";       
        }
        if($_POST['room_type'] == 'Double AC'){
            $query = "update double_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],
            mobile = '$_POST[holder_mobile]',address = '$_POST[holder_address]',child = $_POST[child_no],
            adult = $_POST[adult_no],in_date = '$_POST[check_in_date]',out_date = '$_POST[check_out_date]',
            status = 1 where room_no = $_GET[rn]";
        }
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            echo '<script>alert("Room is booked now")</script>';
            
        }
        
   } 
?>



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

 <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../image/favicon.png" type="image/png">
        <title>Royal Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
        <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>

        <style type="text/css">
            .btn{
                margin-right: 15px;
            }
        </style>
    </head>
    

    <br><br><br><br><br><br><br>
    <!--================Banner Area END =================-->
   
   
   <div class="row">
       	<div class="col-md-12">
       		<center><h3>Room Booking Page</h3></center>
       	</div>
       </div>
        <div class="row">
        	<div class="col-md-4"></div>
        	<div class="col-md-4">
        	<form action="" method="post">
			<div class="form-group">
		    	<label for="room_no">Room No:</label>
		    	<input type="text" class="form-control" name="room_no" value="<?php echo $_GET['rn'];?>" disabled>
		  	</div>
			<div class="form-group">
		    	<label for="room_type">Room Type:</label>
		    	<input type="text" class="form-control" name="room_type" value="<?php 
                if($_GET['rt'] == 'a'){echo 'Single Non-AC';}
                if($_GET['rt'] == 'b'){echo 'Single AC';}
                if($_GET['rt'] == 'c'){echo 'Double AC';}
                if($_GET['rt'] == 'd'){echo 'Double Non-AC';}
                ?>">
		  	</div>
            <div class="form-group">
                <label for="holder_name">Holder Name:</label>
                <input type="text" class="form-control" name="holder_name" required="">
            </div>
            <div class="form-group">
                <label for="holder_id">Holder ID:</label>
                <input type="text" class="form-control" name="holder_id" required="">
            </div>
            <div class="form-group">
                <label for="holder_mobile">Holder Mobile:</label>
                <input type="text" class="form-control" name="holder_mobile" required="">
            </div>
            <div class="form-group">
                <label for="holder_address">Holder Address:</label>
                <textarea rows="3" cols="40" class="form-control" name="holder_address"></textarea>
            </div>
            <div class="form-group">
                <label>No of Child:</label>
                <select class="form-control" name="child_no">
                    <option>-Select-</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="select_adult">No of Adult:</label>
                <select class="form-control" id="select_adult" name="adult_no">
                    <option>-Select-</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="check-in">Check-In Date:</label>
                <input type="date" class="form-control" name="check_in_date" required="">
            </div>
            <div class="form-group">
                <label for="check-out">Check-Out Date:</label>
                <input type="date" class="form-control" name="check_out_date" required="">
            </div>
            <br><br>
			<button type="submit" name="book_room" class="btn btn-warning">Book Now</button>
		</form>
        	</div>
        	<div class="col-md-4"></div>
        </div>
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
   <script src="../main.js"></script>
   
</body>
</html>