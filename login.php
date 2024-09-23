<?php
    session_start();

    include("db.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST['Username'];
        $password = $_POST['password'];
        $userID = $_POST['userId'];

        if (!empty($username) && !empty($password) && is_numeric($userID)) {
            // Use mysqli instead of mysql
            $query = "SELECT * FROM registration WHERE Username= '$username' LIMIT 1";
            $result = mysqli_query($con, $query);

            if ($result) {
                if ($result && mysqli_num_rows($result) > 0) {
                    $user_data = mysqli_fetch_assoc($result);
                    // Check if the password matches
                    if ($user_data['password'] == $password) {
                        header("location:./Simple Website Design/index.html");
                        die;
                        
                    }
                }
            }
            echo "<script type='text/javascript'>alert('Wrong username or password')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Please enter valid information')</script>";
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

    body, html {
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
      background: white;
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

    .left-column {
      flex: 60%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .box {
      position: relative;
      width: 380px;
      height: 500px;
      background: #1c1c1c;
      border-radius: 8px;
      overflow: hidden;
    }

    .box::before,
    .box::after,
    .borderLine::before,
    .borderLine::after {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 380px;
      height: 420px;
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
    }

    .box form h2 {
      color: #fff;
      font-weight: 500;
      text-align: center;
      letter-spacing: 0.1em;
    }

    .box form .inputBox {
      position: relative;
      width: 300px;
      margin-top: 35px;
    }

    .box form .inputBox input {
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
    .box form .inputBox input:focus~span {
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
    .box form .inputBox input:focus~i {
      height: 44px;
    }

    .box form .Links {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .box form .Links a {
      font-size: 0.75em;
      color: #8f8f8f;
      text-decoration: none;
    }

    .box form .Links a:hover,
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
      width: 100px;
      margin-top: 10px;
      
    }
    

    .box form input[type="submit"]:active {
      opacity: 0.8;
    }
  </style>
</head>
<body>
<div class="container">
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
    <div class="left-column">
      <div class="box">
        <span class="borderLine"></span>
        <form method="POST" >
          <h2>Sign In</h2>
          <div class="inputBox">
            <input type="text" name="Username" required="required">
            <span>Username</span>
            <i></i>
            
          </div>
          <div class="inputBox">
            <input type="number" name="userId" required="required">
            <span>UserId</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input type="password" name="password" required="required">
            <span>Password</span>
            <i></i>
          </div>
          <div class="Links">
            <a href="#">Forgot Password</a>
            
          </div>
          <input type="submit" value="Login">
          
          <div class="Links">
    <span style="color: #fff;">Don't have an account?
    <a href="#" onclick="redirectToRegistration()">SignUp</a></span>
  </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    function redirectToRegistration() {
      window.location.href = "registration.php";
    }
  </script>
</body>
</html>