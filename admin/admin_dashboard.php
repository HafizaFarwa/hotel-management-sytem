
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
    
<!--================Header Area Finish=================-->
<br><br><br><br><br><br>
 
<!-- Header ends here -->

<br><br><br>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="" method="post">
        <a href=" rooms.php" class="btn btn-primary">Book Rooms</a>
        <a href="" class="btn btn-success">Check Room Status</a>
        <a href="" class="btn btn-warning">View user details</a>
        <a href="" class="btn btn-info">Recently check-outs</a>
        <a href="logout.php" class="btn btn-danger">Logut</a>
        </form>
    </div>
    <div class="col-md-2"></div>    
</div>
<br><br><br><br><br>
<div class="row">
       	<div class="col-md-12">
       		<center><h3>Checked In Users Details</h3></center>
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID</th>
                            <th>User Mobile</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"db_contact");
                    $query = "select * from room where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                 
                    $query = "select * from single_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['room_id'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
    
                    $query = "select * from double_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                
                    $query = "select * from double_non_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>


            </table>
        	</div>
        </div>
        <br><br><br><br><br><br>
       


 <br><br><br><br><br><br><br><br><br><br>

<!-- Footer is starting from here -->
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