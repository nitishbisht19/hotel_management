<?php
    session_start();
    if(isset($_POST['admin_login'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"pi_hotel");
        $query = "select * from admin where email = '$_POST[email]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            if($row['email'] == $_POST['email']){
                if($row['password'] == $_POST['password']){
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    header("Location:admin_dashboard.php");
                }
                else{
                    echo "<script>alert('Wrong Password...');</script>";
                }
            }
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../image/favicon.png" type="image/png">
        <script
      src="https://kit.fontawesome.com/269d4daff8.js"
      crossorigin="anonymous"
    ></script>
        <title>Admin Login</title>
        <!-- Bootstrap CSS -->
        
    <link rel="stylesheet" href="../xyz.css" />

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
    </head>
    <body>
        <!--================Header Area =================-->
        <div class="mynotch"></div>
    <div class="myhead">
      <div id="logo">
        <a href="../index.html"
          ><img src="../Photo Stock/Logo.png" alt="Please Refresh" width="100"
        /></a>
      </div>
      <div class="myrows">The <span id="Pi"> PI </span> Hotel</div>
    </div>
    <hr />
    <br /><br /><br /><br />
        <!--================Header Area Finish=================-->
    
        <br><br><br><br><br>
        <!--================Banner Area END =================-->
       <div class="row">
       	<div class="col-md-12">
       		<center><h3>Admin Login Page</h3></center>
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
        		<form action="" method="post">
			<div class="form-group">
		    	<label for="name">Email:</label>
		    	<input type="text" class="form-control" name="email" required="">
		  	</div>
			<div class="form-group">
		    	<label for="email">Password:</label>
		    	<input type="password" class="form-control" name="password" required="">
		  	</div>
		  	
				<button type="submit" class="btn btn-warning" name="admin_login">Login</button>
		</form>
        
        	</div>
        	<div class="col-md-2"></div>
        </div>
        <br><br><br><br><br><br>
        <!--================ start footer Area  =================-->	
        <div class="myend" style="font-size: 23px">
      <ul type="none" style="background: #dcdcdc">
        <li><a href="../privacy.html" style="text-decoration: none; color: black">Privacy Policy</a></li>
        <li>
          <a href="../t&c.html" style="text-decoration: none; color: black">Terms and Condition</a>
        </li>
        <li style="color: black;">
          Contact us:
          <a href="https://www.facebook.com/"
            ><i class="fab fa-facebook" style="font-size: 30px; color: blue"></i
          ></a>
          <a href="https://www.instagram.com/"
            ><i class="fab fa-instagram" style="font-size: 30px; color: red"></i
          ></a>
          <a href="https://www.twitter.com/"
            ><i
              class="fab fa-twitter-square"
              style="font-size: 30px; color: blue"
            ></i
          ></a>
          <a href="https://www.gmail.com/"
            ><i class="fas fa-envelope" style="font-size: 30px; color: red"></i
          ></a>
        </li>
      </ul>
      <p align="center" style="background: #69a197; color: black; height: 4vh">
        &copy Copyright: PI Buisness
      </p>
    </div>
    </body>
</html>
