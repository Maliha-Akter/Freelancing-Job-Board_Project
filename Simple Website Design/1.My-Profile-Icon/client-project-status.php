<?php
session_start();
include("../../db.php");

// Check if the client is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Fetch projects for the specific client
    $queryProjects = "SELECT * FROM project WHERE client_id = '$user_id'";
    $resultProjects = mysqli_query($con, $queryProjects);

    // Check if any projects are found
    if ($resultProjects && mysqli_num_rows($resultProjects) > 0) {
        // Display the projects
        echo "<h1>Projects for Client ID: $user_id</h1>";
        echo "<table>";
        echo "<tr><th>Project Status</th><th>Job ID</th><th>Freelancer ID</th><th>Freelancer Email</th></tr>";

        while ($rowProject = mysqli_fetch_assoc($resultProjects)) {
            echo "<tr>";
            echo "<td>" . $rowProject['project_status'] . "</td>";
            echo "<td>" . $rowProject['JobId'] . "</td>";
            echo "<td>" . $rowProject['freelancer_id'] . "</td>";
            echo "<td>" . $rowProject['freelancer_email'] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        // No projects found for the client
        echo "<p>No projects found for Client ID: $user_id</p>";
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
    <title>Client Project Status</title>
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