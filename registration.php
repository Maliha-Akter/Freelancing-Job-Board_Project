<?php
    session_start();

    include("db.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST['user-name'];
        $fullname = $_POST['full-name'];
        $gmail = $_POST['email'];
        $num = $_POST['number'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $address = $_POST['address'];

        if (!empty($gmail) && !empty($password)) {
            $query = "INSERT INTO registration (Username, FullName, Email, password, confirmPassword, address, phone_number) 
                      VALUES ('$username', '$fullname', '$gmail', '$password', '$confirmPassword', '$address', '$num')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'>alert('Successfully Register')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Please Enter valid Information')</script>";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Animation Page</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body,
    html {
      height: 100%;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #23242a;
      margin: 0;
    }

    .container {
      display: flex;
      width: 100%;
      height: 100%;
    }

    .left-column {
      flex: 60%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .box {
      position: relative;
      width: 450px;
      /* Decreased box size */
      height: 500px;
      /* Decreased box size */
      background: #1c1c1c;
      border-radius: 8px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      align-items: center;
      /* Center elements horizontally */
      justify-content: center;
      /* Center elements vertically */
    }

    .box::before,
    .box::after,
    .borderLine::before,
    .borderLine::after {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 450px;
      height: 500px;
      background: linear-gradient(0deg, transparent, transparent, #45f3ff, #45f3ff, #45f3ff);
      z-index: 1;
      transform-origin: bottom right;
      animation: animate 6s linear infinite;
    }

    .box::after {
      animation-delay: -3s;
    }

    .borderLine::before {
      background: linear-gradient(0deg, transparent, transparent, #ff2770, #ff2770, #ff2770);
      animation-delay: -1.5s;
    }

    .borderLine::after {
      background: linear-gradient(0deg, transparent, transparent, #ff2770, #ff2770, #ff2770);
      animation-delay: -4.5s;
    }

    @keyframes animate {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    .box form {
      position: absolute;
      inset: 4px;
      background: #222;
      padding: 50px 40px;
      border-radius: 8px;
      z-index: 2;
      display: flex;
      flex-direction: column;
      width: 100%;
      /* Occupy full width of the box */
    }

    .box form h2 {
      color: #fff;
      font-weight: 500;
      text-align: center;
      letter-spacing: 0.1em;
    }

    .box form .inputRow {
      display: flex;
      justify-content: space-between;
      width: 100%;
      margin-top: 20px;
      /* Adjusted margin */
    }

    .box form .inputBox {
      position: relative;
      width: 48%;
      /* Adjusted width for two columns */
    }

    .box form .inputBox-address {
      position: relative;
      width: 100%;
      /* Set width to 100% for full width */
      margin-bottom: 20px;
      /* Added margin for spacing */
    }

    .box form .inputRow-address {
      display: flex;
      justify-content: space-between;
      width: 100%;
      margin-top: 20px;
      /* Adjusted margin */
    }

    .box form .inputBox input,
    .box form .inputBox textarea,
    .box form .inputBox select {
      position: relative;
      width: 100%;
      padding: 20px 10px 10px;
      background: transparent;
      outline: none;
      border: none;
      box-shadow: none;
      color: #23242a;
      font-size: 1em;
      letter-spacing: 0.05em;
      transition: 0.5s;
      z-index: 10;
    }

    .box form .inputBox span {
      position: absolute;
      left: 0;
      padding: 20px 0px 10px;
      pointer-events: none;
      color: #8f8f8f;
      font-size: 1em;
      letter-spacing: 0.05em;
      transition: 0.5s;
    }

    .box form .inputBox input:valid~span,
    .box form .inputBox textarea:valid~span,
    .box form .inputBox select:valid~span,
    .box form .inputBox input:focus~span,
    .box form .inputBox textarea:focus~span,
    .box form .inputBox select:focus~span {
      color: #fff;
      font-size: 0.75em;
      transform: translateY(-34px);
    }

    .box form .inputBox i {
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 2px;
      background: #fff;
      border-radius: 4px;
      overflow: hidden;
      transition: 0.5s;
      pointer-events: none;
    }

    .box form .inputBox input:valid~i,
    .box form .inputBox input:focus~i,
    .box form .inputBox textarea:valid~i,
    .box form .inputBox textarea:focus~i,
    .box form .inputBox select:valid~i,
    .box form .inputBox select:focus~i {
      height: 44px;
    }

    .box form .Links {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
      flex-direction: column;
      /* Align items in a column */
      align-items: center;
    }

    .box form .Links a {
      font-size: 0.9em;
      /* Adjusted font size */
      color: #ff69b4;
      /* Set text color to the desired color */
      text-decoration: none;
      padding: 5px 10px;
      /* Adjusted padding for a button-like look */
      border: 2px solid #ff69b4;
      /* Added border */
      border-radius: 4px;
      /* Added border-radius for rounded corners */
      transition: 0.3s;
      /* Added transition for smooth hover effect */
    }

    .box form .Links a:hover {
      background-color: #ff69b4;
      /* Change background color on hover */
      color: #fff;
      /* Change text color on hover */
    }

    .box form .Links a:nth-child(2) {
      color: #fff;
    }

    .box form input[type="submit"] {
      border: none;
      outline: none;
      padding: 9px 25px;
      background: #fff;
      cursor: pointer;
      font-size: 0.9em;
      border-radius: 4px;
      font-weight: 600;
      width: 100%;
      margin-top: 10px;
    }

    .box form input[type="submit"]:active {
      opacity: 0.8;
    }

    .right-column {
      flex: 40%;
      display: flex;
      flex-direction: column;
    }

    .right-row1 {
      flex: 35%;
      background: #ff69b4;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
      color: #fff;
    }

    .right-row2 {
      flex: 65%;
      background: #ff69b4;
      /* Pink background color */
      position: relative;
    }

    .video-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .box form .inputBox-address textarea {
      position: relative;
      width: 100%;
      padding: 20px 10px 10px;
      background: transparent;
      outline: none;
      border: none;
      box-shadow: none;
      color: #23242a;
      font-size: 1em;
      letter-spacing: 0.05em;
      transition: 0.5s;
      z-index: 10;
      resize: none;
      /* Disable textarea resizing */
    }

    .box form .inputBox-address textarea:valid,
    .box form .inputBox-address textarea:focus {
      color: #fff;
    }

    .box form .inputBox-address span {
      position: absolute;
      left: 0;
      padding: 20px 0px 10px;
      pointer-events: none;
      color: #8f8f8f;
      font-size: 1em;
      letter-spacing: 0.05em;
      transition: 0.5s;
    }

    .box form .inputBox-address textarea:valid~span,
    .box form .inputBox-address textarea:focus~span {
      color: #fff;
      font-size: 0.75em;
      transform: translateY(-34px);
    }

    .box form .inputBox-address i {
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 2px;
      background: #fff;
      border-radius: 4px;
      overflow: hidden;
      transition: 0.5s;
      pointer-events: none;
    }

    .box form .inputBox-address textarea:valid~i,
    .box form .inputBox-address textarea:focus~i {
      height: 44px;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="left-column">
      <div class="box">
        <span class="borderLine"></span>
        <form method="post">
          <h2>Sign Up</h2>
          <div class="inputRow">
            <div class="inputBox">
              <input type="text" name="user-name" required="required">
              <span>Username</span>
              <i></i>
            </div>
            <div class="inputBox">
              <input type="text" name="full-name" required="required">
              <span>Full Name</span>
              <i></i>
            </div>
          </div>
          <div class="inputRow">
            <div class="inputBox">
              <input type="email" name="email" required="required">
              <span>Email address</span>
              <i></i>
            </div>
            <div class="inputBox">
              <input type="number" name="number" required="required">
              <span>Phone Number</span>
              <i></i>
            </div>
          </div>
          <div class="inputRow">
            <div class="inputBox">
              <input type="password" name="password" required="required">
              <span>Password</span>
              <i></i>
            </div>
            <div class="inputBox">
              <input type="password" name="confirmPassword" required="required">
              <span>Confirm Password</span>
              <i></i>
            </div>
          </div>
          <div class="inputRow-address">
            <div class="inputBox-address">
              <textarea required="required" name="address" style="width: 100%; color:black"></textarea>
              <span>Address</span>
              <i></i>
            </div>
          </div>
          <input type="submit" value="Sign Up">
          <div class="Links">
            <span style="color: #fff;">Already have an account?
              <a href="#" onclick="redirectToLogin()">Log in</a></span>
          </div>
        </form>
      </div>
    </div>
    <div class="right-column">
      <div class="right-row1">
        <h1>Welcome to the Freelancer Job Board!</h1>
        <p>Discover exciting freelance opportunities and connect with talented professionals.</p>
      </div>
      <div class="right-row2">
        <div class="video-container">
          <video autoplay muted loop>
            <!-- Add your video source here -->
            <source src="video.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>
  <script>
    function redirectToLogin() {
      window.location.href = "login.php";
    }
  </script>

</body>

</html>