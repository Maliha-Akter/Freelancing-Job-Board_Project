<?php
session_start();
include("../../db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Form submitted";
    $freelancerId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

    // Retrieve email from freelancer table
    $getEmailQuery = "SELECT email FROM freelancer WHERE freelancer_id=?";
    $getEmailResult = mysqli_prepare($con, $getEmailQuery);
    mysqli_stmt_bind_param($getEmailResult, "i", $freelancerId);
    mysqli_stmt_execute($getEmailResult);
    mysqli_stmt_bind_result($getEmailResult, $freelancerEmail);
    mysqli_stmt_fetch($getEmailResult);
    mysqli_stmt_close($getEmailResult);

    $clientId = intval($_POST['client_id']); // Ensure client_id is an integer
    $clientEmail = $_POST['client_email'];
    $jobId = intval($_POST['job_id']); // Ensure job_id is an integer
    $projectStatus = $_POST['project_status'];

    // Check if the submitted project_status value is valid
    if ($projectStatus !== 'yes' && $projectStatus !== 'no') {
        echo "<script>alert('Invalid project status. Please select a valid option.')</script>";
    } else {
        // Check if the Job ID exists in the job_apply table
        $checkJobIdQuery = "SELECT * FROM job_apply WHERE JobId = ?";
        $checkJobIdResult = mysqli_prepare($con, $checkJobIdQuery);
        mysqli_stmt_bind_param($checkJobIdResult, "i", $jobId); // Use "i" for integer
        mysqli_stmt_execute($checkJobIdResult);
        mysqli_stmt_store_result($checkJobIdResult);

        if (mysqli_stmt_num_rows($checkJobIdResult) > 0) {
            // Insert the project details into the project table
            $insertQuery = "INSERT INTO project (project_status, freelancer_id, client_id, JobId, freelancer_email) 
                            VALUES (?, ?, ?, ?, ?)";
            $insertResult = mysqli_prepare($con, $insertQuery);
            mysqli_stmt_bind_param($insertResult, "ssiss", $projectStatus, $freelancerId, $clientId, $jobId, $freelancerEmail);

           

            if (mysqli_stmt_execute($insertResult)) {
                echo "<script>alert('Project added successfully!')</script>";
            } else {
                echo "<script>alert('Failed to insert data into project table: " . mysqli_error($con) . "')</script>";
                echo "SQL error: " . mysqli_stmt_error($insertResult);
            }

            mysqli_stmt_close($insertResult); // Close the statement after execution
        } else {
            echo "<script>alert('Job ID does not exist. Please enter a valid Job ID.')</script>";
        }
    }
}

// Close the connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply For Job</title>
    <style>
        /* Your CSS Styles */
        body {
            background-color: beige;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px;
            text-align: center;
            background: beige;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            padding: 20px;
        }

        input[type="file"] {
            margin-top: 20px;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Project Status</h1>
        <?php
        if (isset($_SESSION['user_id'])) {
            $freelancerId = $_SESSION['user_id'];
            echo "<p>Freelancer ID: $freelancerId</p>";
        }
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="client_id">ClientID:</label>
            <input type="text" name="client_id" id="client_id"required><br>

            <label for="client_email">Client Email:</label>
            <input type="email" name="client_email" id="client_email" required><br>

            <label for="job_id">Job ID:</label>
            <input type="text" name="job_id" id="job_id" required><br>

            <label for="project_status">Project Status:</label>
            <select name="project_status" id="project_status" required>
                <option value="yes">yes</option>
                <option value="no">no</option>
            </select><br>

            <input type="submit" value="Submit">
        </form>
    </div>
    <script>
        // Your JavaScript code
        // This script is just for demonstration purposes
        // You can customize it based on your requirements

        // Example: Display an alert when the form is submitted
        document.querySelector('form').addEventListener('submit', function (event) {
            alert('Form submitted!');
        });
    </script>
</body>

</html>