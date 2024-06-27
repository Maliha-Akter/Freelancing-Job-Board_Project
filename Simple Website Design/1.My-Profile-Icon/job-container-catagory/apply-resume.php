<?php
session_start();
include("../../../db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the form is submitted
    if (isset($_FILES['resume'])) {
        $file = $_FILES['resume'];

        // Specify the directory where you want to save the uploaded file
        $uploadDirectory = 'uploads/';

        // Create the directory if it doesn't exist
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        // Generate a unique filename for the uploaded file
        $uniqueFilename = uniqid('resume_') . '_' . basename($file['name']);

        // Set the target path for saving the file
        $targetPath = $uploadDirectory . $uniqueFilename;

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
            // File uploaded successfully, now insert data into the job_apply table
            $freelancerId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

            // Retrieve email from freelancer table
            $getEmailQuery = "SELECT email FROM freelancer WHERE freelancer_id='$freelancerId'";
            $getEmailResult = mysqli_query($con, $getEmailQuery);

            if ($getEmailResult && mysqli_num_rows($getEmailResult) > 0) {
                $row = mysqli_fetch_assoc($getEmailResult);
                $freelancerEmail = $row['email'];

                // Retrieve client ID, client email, and job ID from form inputs
                $clientId = $_POST['client_id'];
                $clientEmail = $_POST['client_email'];
                $jobId = $_POST['job_id'];

                // Insert data into the job_apply table
                $query = "INSERT INTO job_apply (freelancer_id, freelancer_email, JobId, client_id, client_email, file_resume) 
                          VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_prepare($con, $query);

                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "ississ", $freelancerId, $freelancerEmail, $jobId, $clientId, $clientEmail, $targetPath);

                    if (mysqli_stmt_execute($stmt)) {
                        echo "<script>alert('File uploaded successfully!')</script>";
                    } else {
                        echo "<script>alert('Failed to insert data into job_apply table: " . mysqli_error($con) . "')</script>";
                    }
                } else {
                    echo "<script>alert('Failed to create prepared statement: " . mysqli_error($con) . "')</script>";
                }
            } else {
                echo "<script>alert('Failed to retrieve freelancer email. Please try again.')</script>";
            }
        } else {
            echo "<script>alert('Failed to upload file. Please try again.')</script>";
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply For Job</title>
    <style>
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
        <h1>Apply For Job</h1>
        <p>Click on the "Choose File" button to upload a resume:</p>

        <?php
        // Start the session
        // session_start();

        // Check if freelancer_id and email are set in the session
        if (isset($_SESSION['user_id']) && isset($_SESSION['email'])) {
            $freelancerId = $_SESSION['user_id'];
            $freelancerEmail =$_SESSION['email'];

            // Display freelancer details
            echo "<p>Freelancer ID: $freelancerId</p>";
            echo "<p>Freelancer Email: $freelancerEmail</p>";
        }
        ?>

        <form action="#" method="post" enctype="multipart/form-data">
            <label for="client_id">Client ID:</label>
            <input type="text" name="client_id" id="client_id" required><br>

            <label for="client_email">Client Email:</label>
            <input type="email" name="client_email" id="client_email" required><br>

            <label for="job_id">Job ID:</label>
            <input type="text" name="job_id" id="job_id" required><br>

            <label for="resume">Choose File:</label>
            <input type="file" name="resume" id="resume" accept=".pdf, .doc, .docx"> <br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>