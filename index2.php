<?php
    session_start();
    if(isset($_POST['sign_in_btn'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"db_contact");
        $query = "select * from signUp";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            if($row['email']==$_POST['email']){
                if($row['password']==$_POST['password']){
                    header("Location:index.html");
                }
                else{
                    echo "<script>alert('Wrong Password');</script>";
                    break;
                }
            }
            else{
                echo "<script>alert('Wrong Email');</script>";
            }
        }
    }

?>



<!DOCTYPE html>
<html>
<head>
	<title>FUR-Hotel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
  
</head>
<body>
  <div class="cont">
    
    <div class="form sign-in">
      
      <h2>FUR Booking System</h2><br>
      <h2>Sign In</h2>

      <label>
        <span>Email Address</span>
        <form method="post" action="">
        <input type="email" id="email" name="email">
      </label>
      <label>
        <span>Password</span>
        <input type="password" id="password" name="password">
      </label>
      <!-- <form action="" method="post">
        <div class="form-group">
            <label for="name">Email:</label>
            <input type="text" class="form-control" name="email" required="">
          </div>
        <div class="form-group">
            <label for="email">Password:</label>
            <input type="password" class="form-control" name="password" required="">
          </div> -->
      <button class="submit" type="submit" name="sign_in_btn"> Sign In</button>
    </form>

      <p class="forgot-pass">Forgot Password ?</p>

      <div class="social-media">
        <ul>
          <li><img src="images2/facebook.png"></li>
          <li><img src="images2/twitter.png"></li>
          <li><img src="images2/linkedin.png"></li>
          <li><img src="images2/instagram.png"></li>
        </ul>
      </div>
    
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <section id="sign-up" name="sign-up">
      <div class="form sign-up">
        <form name="sign-up" method="post"action="sign-up.php">
        <h2>FUR Booking System</h2><br>
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input name= "name" id="name" type="text">
        </label>
        <label>
          <span>Email</span>
          <input name="email" id="email"type="email">
        </label>
        <label>
          <span>Password</span>
          <input name="password"id="password"type="password">
        </label>
        <label>
          <span>Confirm Password</span>
          <input name="c_password"id="c_password" type="password">
        </label>
        <button type="submit" class="submit">Sign Up Now</button>
      </form>
      </div>
      </section>
    </div>
  </div>
<script type="text/javascript" src="script2.js"></script>
</body>
</html>