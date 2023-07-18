<?php
session_start();
if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"pi_hotel");

        $query = "INSERT into user(name,email,password,mobile) VALUES('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mobile]')";

        $query_run = mysqli_query($connection,$query);
			  header("location:login.php");
    }
     
    ?>


<!DOCTYPE html>
<html>
  <head>
    <title>User Signup</title>
  </head>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-image: url("./Photo Stock/towel.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    * {
      box-sizing: border-box;
    }
    form {
      border: 3px solid rebeccapurple;
    }

    /* Full-width input fields */
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      background-color: #ddd;
      outline: none;
    }

    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    /* Set a style for all buttons */
    button {
      background-color: #04aa6d;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    button:hover {
      background-color: green;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn,
    .signupbtn {
      float: left;
      width: 100%;
    }

    /* Add padding to container elements */
    .container {
      padding: 16px;
    }

    /* Clear floats */
    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
      .signupbtn {
        width: 100%;
      }
    }
  </style>
  <body>
    <div align="center">
      <div style="width: 60vw" align="left">
        <form action="" method="post">
          <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr />

            <label for="name"><b>Name</b></label>
            <input
              type="text"
              placeholder="Enter Your Name"
              name="name"
            />

            <label for="email"><b>Email</b></label>
            <input
              type="text"
              placeholder="Enter Email"
              name="email"
              required
            />

            <label for="mobile"><b>Mobile Number</b></label>
            <input
              type="text"
              placeholder="Enter Mobile Number"
              name="mobile"
              required
            />

            <label for="password"><b>Password</b></label>
            <input
              type="password"
              placeholder="Enter Password"
              name="password"
              required
            />

            <p>
              By creating an account you agree to our
              <a href="t&c.html" style="color: dodgerblue">Terms & Privacy</a>.
            </p>

            <div class="clearfix">
              <button type="submit" class="signupbtn" name="submit">Sign Up</button>
            </div>
          </div>
        </form>
        <br />
        <div align="center">
          <a
            href="login.php"
            class="login"
            style="text-decoration: none; color: black"
            >Already have an account? Login to proceed!</a
          >
        </div>
      </div>
    </div>
  </body>
</html>
