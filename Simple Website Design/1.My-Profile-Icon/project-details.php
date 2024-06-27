<?php
session_start();
include("job-posting-db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .job-container {
            margin-top: 50px;
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .job-details {
            margin-top: 20px;
        }

        .job-details p {
            margin: 5px 0;
        }

        .job-details hr {
            border: 0.5px solid #ddd;
        }
    </style>
</head>

<body>

    <div class="job-container">
        <h2>Your Last Added Job</h2>

        <?php
        // Check if a user is logged in
        if (!isset($_SESSION['user_id'])) {
            echo "<p>User not logged in</p>";
            exit;
        }

        // Fetch client_id from the session
        $client_id = (int)$_SESSION['user_id'];

        // Retrieve the most recently added job for the logged-in client
        $jobQuery = "SELECT * FROM Job WHERE client_id = $client_id ORDER BY JobId DESC LIMIT 1";
        $jobResult = mysqli_query($conn, $jobQuery);

        // Check for SQL errors
        if (!$jobResult) {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
            exit;
        }

        // Display job details
        while ($row = mysqli_fetch_assoc($jobResult)) {
            echo "<div class='job-details'>";
            echo "<p>Job ID: " . $row['JobId'] . "</p>";
            echo "<p>Job Category: " . $row['JobCategory'] . "</p>";
            echo "<p>Required Skills: " . $row['RequiredSkills'] . "</p>";
            echo "<p>Working Hour: " . $row['WorkingHour'] . "</p>";
            echo "<p>Project Size: " . $row['ProjectSize'] . "</p>";
            echo "<p>Budget: $" . $row['Budget'] . "</p>";
            echo "<hr>";
            echo "</div>";
        }
        ?>

    </div>

</body>

</html>
