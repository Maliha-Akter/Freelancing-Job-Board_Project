<?php
session_start();
include("client-freelancer-db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['register'])) {
    // Registration logic here...

    // Example: Inserting data into the client table
    $userId = $_POST['userId'];
    $username = $_POST['Username'];
    $password = $_POST['password'];

    // Fetch email from the registration table
    $getEmailQuery = "SELECT Email FROM registration WHERE UserId='$userId'";
    $getEmailResult = mysqli_query($con, $getEmailQuery);

    if ($getEmailResult && mysqli_num_rows($getEmailResult) > 0) {
        $row = mysqli_fetch_assoc($getEmailResult);
        $email = $row['Email'];

        // Insert data into the client table
        $query = "INSERT INTO client (user_id, username, password, email) VALUES ('$userId', '$username', '$password', '$email')";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "Registration successful!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "<script type='text/javascript'>alert('User ID does not exist')</script>";
    }
} elseif (isset($_POST['login'])) {
        // Login logic here...

        // Example: Checking credentials against the client table
        $userId = $_POST['userId'];
        $username = $_POST['txt'];
        $password = $_POST['pswd'];

        $query = "SELECT * FROM client WHERE user_id='$userId' AND username='$username' AND password='$password'";
        $result = mysqli_query($con, $query);

        // Print for debugging
        echo "Debug: user_id - $userId<br>";
        echo "Debug: Query - $query<br>";

        if (mysqli_num_rows($result) > 0) {
            // Fetch the client_id from the result
            $row = mysqli_fetch_assoc($result);
            $client_id = $row['client_id'];

            // Store client_id in the session
            $_SESSION['user_id'] = $client_id;

            header("location: job-posting-c.php");
            die;
        } else {
            echo "Invalid credentials";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sliding Login Form</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8iN17PdL7nW6C1CUZzPFZ_Ui6DO/6Pq5ZeF5K9S2Y1L+oO8I6P1p1JYY" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-....">

  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      align-items: center;
      display: flex;
      justify-content: center;
      flex-direction: column;
      margin: 0;
      overflow: hidden;
      height: 100vh;
      background: linear-gradient(-45deg);
      background-size: 400% 400%;
      animation: gradientAnimation 14s infinite;
    }

    @keyframes gradientAnimation {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .container {
      position: relative;
      width: 768px;
      max-width: 100%;
      height: 550px;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    .sign-up,
    .sign-in {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      transition: all 0.6s ease-in-out;
    }

    .sign-up {
      width: 50%;
      opacity: 0;
      z-index: 1;
    }

    .sign-in {
      width: 50%;
      z-index: 2;
    }

    form {
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 0 50px;
      height: 100%;
      text-align: center;
    }

    h1 {
      font-weight: bold;
      margin: 0;
    }

    p {
      font-size: 14px;
      font-weight: 100;
      line-height: 20px;
      letter-spacing: 0.5px;
      margin: 15px 0 20px;
    }

    input {
      background: #eee;
      padding: 12px 15px;
      margin: 8px 15px;
      width: 100%;
      border-radius: 5px;
      border: none;
      outline: none;
    }

    a {
      color: #333;
      font-size: 14px;
      text-decoration: none;
      margin: 15px 0;
    }

    button {
      color: #fff;
      background: #ff4b2b;
      font-size: 12px;
      font-weight: bold;
      padding: 12px 55px;
      margin: 20px;
      border-radius: 20px;
      border: 1px solid #ff4b2b;
      outline: none;
      letter-spacing: 1px;
      text-transform: uppercase;
      transition: transform 80ms ease-in;
      cursor: pointer;
    }

    button:active {
      transform: scale(0.90);
    }

    #signIn,
    #signUp {
      background-color: transparent;
      border: 2px solid #fff;
    }

    .container.right-panel-active .sign-in {
      transform: translateX(100%);
    }

    .container.right-panel-active .sign-up {
      transform: translateX(100%);
      opacity: 1;
      z-index: 5;
    }

    .overlay-container {
      position: absolute;
      top: 0;
      left: 50%;
      width: 50%;
      height: 100%;
      overflow: hidden;
      transition: transform 0.6s ease-in-out;
      z-index: 100;
    }

    .container.right-panel-active .overlay-container {
      transform: translateX(-100%);
    }

    .overlay {
      position: relative;
      color: #fff;
      background: #ff416c;
      left: -100%;
      height: 100%;
      width: 200%;
      background: linear-gradient(to right, #ff4b28, #ff228c);
      transform: translateX(0);
      transition: transform 0.6s ease-in-out;
    }

    .container.right-panel-active .overlay {
      transform: translateX(50%);
    }

    .overlay-left,
    .overlay-right {
      position: absolute;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 0 40px;
      text-align: center;
      top: 0;
      height: 100%;
      width: 50%;
      transform: translateX(0);
      transition: transform 0.6s ease-in-out;
    }

    .overlay-left {
      transform: translateX(-20%);
    }

    .overlay-right {
      right: 0;
      transform: translateX(0);
    }

    .container.right-panel-active .overlay-left {
      transform: translateX(0);
    }

    .container.right-panel-active .overlay-right {
      transform: translateX(20%);
    }

    .social-container {
      margin: 20px 0;
    }

    .social-container a {
      height: 40px;
      width: 40px;
      margin: 0 5px;
      justify-content: center;
      display: inline-flex;
      align-items: center;
      border: 1px solid #ccc;
      border-radius: 50%;
    }

    * {
      box-sizing: border-box;
    }
  </style>
</head>

<body>
  
  <div class="container" id="main">
    <div class="sign-up">
      <form action="#" method="post" >
        <h1>Create Account As Client</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <!-- <a href="#" class="social"><i class="fab fa-linked-in"></i></a> -->
        </div>
        <p>or use your email for your registration</p>
        <input type="number" name="userId" placeholder="user Id" required="required">
        <!-- <input type="email" name="email" placeholder="email" required="required"> -->
        <input type="text" name="Username" placeholder="username" required="">
        <input type="password" name="password" placeholder="Password" required="">
        <button type="submit" name="register">Sign up</button>
      </form>
    </div>

    <div class="sign-in">
      <form action="#" method="post">
        <h1>Sign In As Client</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
        </div>
        <p>or use your account</p>
        <input type="number" name="userId" placeholder="user Id" required="required">
        <input type="text" name="txt" placeholder="userame" required="">
       
        <input type="password" name="pswd" placeholder="Password" required="">
        <a href="#">Forget your password?</a>
        <button type="submit" name="login">Sign In</button>
      </form>
    </div>

    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-left">
          <h1>Welcome back</h1>
          <p>To keep connected please login with your personal info</p>
          <button id="signIn">Sign In</button>
        </div>
        <div class="overlay-right">
          <h1>Hello, Friend</h1>
          <p>Enter Your Personal details and start the journey with us</p>
          <button id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const main = document.getElementById('main');

    signUpButton.addEventListener('click', () => {
      main.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
      main.classList.remove("right-panel-active");
    });
  </script>
</body>

</html>
