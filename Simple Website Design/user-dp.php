<?php
session_start();
include("../db.php");

if (isset($_GET['user_id'])) {
    $userId = $_GET['user_id'];
    $query = "SELECT * FROM registration WHERE UserId = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "i", $userId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Display user information on the profile page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8iN17PdL7nW6C1CUZzPFZ_Ui6DO/6Pq5ZeF5K9S2Y1L+oO8I6P1p1JYY" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            overflow: hidden;
            width: 300px;
            text-align: center;
        }

        .profile-icon {
            font-size: 48px;
            margin-top: 20px;
        }

        .user-details {
            padding: 20px;
        }

        h1 {
            margin: 0;
        }

        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-icon">
            <i class="fas fa-user-circle"></i>
        </div>
        <div class="user-details">
            <h1>User Profile</h1>
            <p>User ID: <?php echo $row['UserId']; ?></p>
            <p>Username: <?php echo $row['Username']; ?></p>
            <p>Full Name: <?php echo $row['FullName']; ?></p>
            <p>Email: <?php echo $row['Email']; ?></p>
            <p>Phone Number: <?php echo $row['phone_number']; ?></p>
            <p>Address: <?php echo $row['address']; ?></p>
            <!-- Add more details as needed -->
            <!-- <img src="../db.php" alt=""> -->
        </div>
    </div>
</body>
</html>
<?php
    } else {
        echo "User not found.";
    }
} else {
    echo "Invalid request.";
}
?>
