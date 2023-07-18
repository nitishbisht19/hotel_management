<?php
    session_start();
    if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"pi_hotel");
        $query = "select * from user where email = '$_POST[email]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            if($row['email'] == $_POST['email']){
                if($row['password'] == $_POST['password']){
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    header("Location:rooms.php");
                }
                else{
                    echo "<script>alert('Wrong Password...');</script>";
                }
            }
        }
    }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Login</title>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: url("./Photo Stock/towel.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
      form {
        border: 3px solid rebeccapurple;
        width: 50vw;
        height: 80vh;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      .login {
        background-color: #04aa6d;
        color: white;
        font-size: 100%;
        padding: 14px 20px;
        margin: 8px 0;
        border: solid goldenrod;
        border-radius: 10px;
        cursor: pointer;
        width: 100%;
      }

      .signup {
        font-size: 100%;
        padding: 14px 20px;
        cursor: pointer;
        width: 100%;
      }

      .login:hover {
        background-color: green;
      }

      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }

      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
      }

      img.avatar {
        width: 40%;
        border-radius: 50%;
      }

      .container {
        padding: 16px;
      }

      span.psw {
        float: right;
        padding-top: 16px;
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
          display: block;
          float: none;
        }
        .cancelbtn {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <div align="center">
      <h2>Welcome to The Pi Hotel.</h2>
      <h3>Login to continue.</h3>

      <form action="" method="post">
        <div class="imgcontainer">
          <img
            src="./Photo Stock/img_avatar2.png"
            alt="Avatar"
            class="avatar"
          />
        </div>

        <div class="container">
          <label for="email"><b>E-Mail</b></label>
          <input
            type="text"
            placeholder="Enter Username"
            name="email"
            required
          />

          <label for="password"><b>Password</b></label>
          <input
            type="password"
            placeholder="Enter Password"
            name="password"
            required
          />

          <button type="submit" class="login" name="submit">Login</button>
          <a
            href="signup.php"
            class="signup"
            style="text-decoration: none; color: black"
            >New to The Pi? Sign Up Now!</a
          ><br><br>
          <a
            href="./admin/index.php"
            class="signup"
            style="text-decoration: none; color: black"
            >If you are an Admin, Please head over here!</a
          >
        </div>
      </form>
    </div>
  </body>
</html>
