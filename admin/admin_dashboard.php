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
        <title>Admin Dashboard</title>
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

        <style type="text/css">
            .btn{
                margin-right: 15px;
            }
        </style>
    </head>
    <body>
        <!--================Header Area =================-->
        <div class="mynotch"></div>
    <div class="myhead">
      <div id="logo">
        <a href="admin_dashboard.php"
          ><img src="../Photo Stock/Logo.png" alt="Please Refresh" width="100"
        /></a>
      </div>
      <div class="myrows">The <span id="Pi"> PI </span> Hotel</div>
    </div>
    <hr />
    <br /><br /><br /><br />
        <!--================Header Area Finish=================-->
        <br><br><br><br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="" method="post" align="center">
                    <a class="btn btn-info" href="admin_dashboard.php">Admin Home</a>
                    <a class="btn btn-primary" href="rooms.php">Book Room</a>
                    <a class="btn btn-success" href="rooms.php">Check Room Status</a>
                    <a class="btn btn-danger" href="logout.php">Logout</a>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
        <br><br><br>
        <!--================Banner Area END =================-->
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
                    $db = mysqli_select_db($connection,"pi_hotel");
                    $query = "select * from deluxe_non_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
                <?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"pi_hotel");
                    $query = "select * from superior_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
                <?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"pi_hotel");
                    $query = "select * from executive_suite where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
                <?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"pi_hotel");
                    $query = "select * from luxury_suite where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
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
        <!--================ start footer Area  =================-->	
        <div class="myend">
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
      <p align="center" style="background: #69a197; color: black">
        &copy Copyright: PI Buisness
      </p>
    </div>
    </body>
</html>