<!doctype html>
<html lang="en">
    <head>
        <title>Select Room</title>

        <script
      src="https://kit.fontawesome.com/269d4daff8.js"
      crossorigin="anonymous"
    ></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="xyz.css">
        <link rel="stylesheet" href="./rooms.css">
        <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
        <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

        <style type="text/css">
            .btn{
                margin-right: 15px;
            }
            .button {
              display: inline-block;
              border-radius: 4px;
              background-color: #f4511e;
              border: none;
              color: #ffffff;
              text-align: center;
              font-size: 20px;
              padding: 15px;
              width: 125px;
              transition: all 0.5s;
              cursor: pointer;
              margin: 5px;
            }

          .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
          }

          .button span:after {
            content: "\00bb";
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
          }

          .button:hover span {
            padding-right: 25px;
          }

          .button:hover span:after {
            opacity: 1;
            right: 0;
          }
        </style>
    </head>
    <body>
        <div class="mynotch"></div>
    <div class="myhead">
      <div id="logo">
        <a href="index.html"
          ><img src="./Photo Stock/Logo.png" alt="Please Refresh" width="100"
        /></a>
      </div>
      <div class="myrows">The <span id="Pi"> PI </span> Hotel</div>
      <div class="logout">
        <a href="logout_user.php"
          ><button class="button" style="vertical-align: middle">
            <span>Logout</span>
          </button></a
        >
      </div>
    </div>
    <hr />
    <br /><br /><br /><br />
        <!--================Header Area Finish=================-->
        
      <br><br><br><br>
        
        <!--================Banner Area END =================-->
       <div class="row">
       	<div class="col-md-12">
       		<center><h3>Book Your Favourite Room</h3></center>
       	</div>
       </div><br><br>
       <center><h5><u>Deluxe Non-AC Rooms</u></h5></center>
       <br>
        <div class="row" style="background: none">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"pi_hotel");
                $query = "select * from deluxe_non_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div><br><br>
        <center><h5><u>Superior AC Room</u></h5></center>
        <br>
        <div class="row" style="background: none">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"pi_hotel");
                $query = "select * from superior_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=b";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div><br><br>
        <center><h5><u>Executive Suite</u></h5></center>
        <div class="row" style="background: none">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"pi_hotel");
                $query = "select * from executive_suite";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=c";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div><br><br>
        <center><h5><u>Luxury Suite</u></h5></center>
        <div class="row" style="background: none">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"pi_hotel");
                $query = "select * from luxury_suite";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=d";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div>
        <br><br><br><br><br><br>
        <!--================ start footer Area  =================-->	
        <div class="myend">
      <ul type="none" style="background: #dcdcdc">
        <li><a href="privacy.html" style="text-decoration: none; color: black">Privacy Policy</a></li>
        <li>
          <a href="t&c.html" style="text-decoration: none; color: black">Terms and Condition</a>
        </li>
        <li>
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
          <a href="https://www.gmail.com.com/"
            ><i class="fas fa-envelope" style="font-size: 30px; color: red"></i
          ></a>
        </li>
      </ul>
      <p align="center" style="background: #69a197; color: black">
        &copy Copyright: PI Buisness
      </p>
    </div>
    </body>
</html>