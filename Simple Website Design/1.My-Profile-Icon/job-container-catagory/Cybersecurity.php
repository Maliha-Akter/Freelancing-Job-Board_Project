
<?php
session_start();
include("../job-posting-db.php");
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
            max-height: 400px; /* Adjust the maximum height based on your preference */
            overflow-y: auto;
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

        .apply-button {
            margin-top: 10px;
            text-align: center;
        }

        .apply-button button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="job-container">
        <h2>Cybersecurity related jobs</h2>

        <?php
        // Retrieve jobs for the "Website Design" category
        $category = "Cybersecurity";
        $jobQuery = "SELECT * FROM Job WHERE JobCategory = '$category'";
        $jobResult = mysqli_query($conn, $jobQuery);

        // Check for SQL errors
        if (!$jobResult) {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
            exit;
        }

        // Display job details and Apply button
        while ($row = mysqli_fetch_assoc($jobResult)) {
            echo "<div class='job-details'>";
            echo "<p>Job ID: " . $row['JobId'] . "</p>";
            echo "<p>Client ID: " . $row['client_id'] . "</p>";
            echo "<p>Client email: " . $row['email'] . "</p>";
            echo "<p>Job Category: " . $row['JobCategory'] . "</p>";
            echo "<p>Required Skills: " . $row['RequiredSkills'] . "</p>";
            echo "<p>Working Hour: " . $row['WorkingHour'] . "</p>";
            echo "<p>Project Size: " . $row['ProjectSize'] . "</p>";
            echo "<p>Budget: $" . $row['Budget'] . "</p>";
            echo "<hr>";

            // Apply Job button for each job
            echo "<div class='apply-button'>";
            echo "<button onclick='applyJob(" . $row['JobId'] . ")'>Apply Job</button>";
            echo "</div>";

            echo "</div>";
        }
        ?>

        <script>
            // Dummy function for Apply Job button
            function applyJob(jobId) {
                alert("Job ID " + jobId + " applied now!");
               
             // Replace 'your_page_url' with the actual URL where you want to redirect the user
                var redirectUrl = 'apply-resume.php';

                // Concatenate the job ID to the URL
                redirectUrl += '?jobId=' + jobId;

                // Redirect to the new URL
               window.location.href = redirectUrl;


            }
        </script>
    </div>

</body>

</html>
