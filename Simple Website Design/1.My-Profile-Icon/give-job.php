<?php
session_start();
include("../../db.php");

// Check if the client is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Fetch job applications for the specific client
    $queryJobApply = "SELECT * FROM job_apply WHERE client_id = '$user_id'";
    $resultJobApply = mysqli_query($con, $queryJobApply);

    // Check if any job applications are found
    if ($resultJobApply && mysqli_num_rows($resultJobApply) > 0) {
        // Display the job applications
        echo "<h1>Job Applications for Client ID: $user_id</h1>";
        echo "<table>";
        echo "<tr><th>Job ID</th><th>Client ID</th><th>Freelancer ID</th><th>Freelancer Email</th><th>File Resume</th></tr>";

        while ($rowJobApply = mysqli_fetch_assoc($resultJobApply)) {
            echo "<tr>";
            echo "<td>" . $rowJobApply['JobId'] . "</td>";
            echo "<td>" . $rowJobApply['client_id'] . "</td>";
            echo "<td>" . $rowJobApply['freelancer_id'] . "</td>";
            echo "<td>" . $rowJobApply['freelancer_email'] . "</td>";
            echo "<td><a href='" . $rowJobApply['file_resume'] . "' download>Download Resume</a></td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        // No job applications found for the client
        echo "<p>No job applications found for Client ID: $user_id</p>";
    }
} else {
    // Client not logged in
    echo "<p>No client logged in. Please log in with your user ID.</p>";
}

// Close the connection
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
</body>
</html>