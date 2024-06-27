<?php
session_start();
include("job-posting-db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent SQL injection
    $client_id = isset($_SESSION['user_id']) ? (int)$_SESSION['user_id'] : 0;

    // Check if the client_id exists in the client table
    $checkClientQuery = "SELECT * FROM client WHERE client_id = $client_id";
    $result = mysqli_query($conn, $checkClientQuery);

    if (mysqli_num_rows($result) == 0) {
        // The client_id does not exist, handle the error or redirect to an error page
        echo "Invalid client_id";
        exit;
    }

    // Fetch email from the client table based on user_id
    $getClientEmailQuery = "SELECT email FROM client WHERE client_id = $client_id";
    $getClientEmailResult = mysqli_query($conn, $getClientEmailQuery);

    if ($getClientEmailResult && mysqli_num_rows($getClientEmailResult) > 0) {
        $row = mysqli_fetch_assoc($getClientEmailResult);
        $clientEmail = $row['email'];

        // Debugging statement
        echo "Debug: Client Email - $clientEmail<br>";

        // Continue with the job insertion...
        $jobCategory = mysqli_real_escape_string($conn, $_POST['jobCategory']);
        $requiredSkills = mysqli_real_escape_string($conn, $_POST['requiredSkills']);
        $workingHour = (int)$_POST['workingHour'];
        $projectSize = mysqli_real_escape_string($conn, $_POST['projectSize']);
        $budget = (float)$_POST['budget'];

        // Insert job details into the Job table, including the client's email
        $sql = "INSERT INTO Job (client_id, JobCategory, RequiredSkills, WorkingHour, ProjectSize, Budget, email) 
                VALUES ('$client_id', '$jobCategory', '$requiredSkills', $workingHour, '$projectSize', $budget, '$clientEmail')";

        if ($conn->query($sql) === TRUE) {
            echo "Job posted successfully!";
            header("location: ../1.My-Profile-Icon/project-details.php");
        } else {
            // Handle errors more gracefully
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Client not found or email not available";
    }

    // Close the database connection
    $conn->close();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resume-div.css">
    <title>Job Posting Form</title>
    <style>
        header {
            height: 10px;
            width: 60%;
            background: url("images/trial.jpg") no-repeat;
            background-position: center;
            background-size: cover;

        }

        ::selection {
            background: #a3f5ec;
        }

        header nav {
            position: fixed;
            width: 100%;
            left: 0;
            top: 0;
            z-index: 12;
        }

        .navbar {
            width: 90%;
            display: flex;
            margin: 20px auto 0 auto;
            align-items: center;
            justify-content: space-between;
        }

        header nav .logo {
            height: 80px;
            width: 400px;
            margin-top: 20px;
        }

        .logo a {

            text-decoration: none;
            font-size: 30px;
            color: black;
        }

        nav .menu {
            display: flex;
        }

        nav .menu li {
            list-style: none;
            margin: 0 10px;
        }

        nav .menu a {
            color: #2c3e50;
            font-size: 17px;
            font-weight: 500;
            text-decoration: none;
        }

        nav .menu a:hover {
            color: #000;
        }

        nav .search-box {

            position: relative;
            height: 40px;
            width: 250px;
        }

        form {}

        form input:focus {
            background: #d6f0f4;
            padding: 10px;
            border: 1px solid white;
        }

        form select:focus {
            background: #d6f0f4;
            padding: 10px;
            border: 1px solid white;
        }

        form label {}

        form input {
            border-radius: 5px;
            /* border: none; */

            border: 1px solid white;
        }

        form select {
            border-radius: 5px;
            /* border: none; */
            border: 1px solid white;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="navbar">
                <div class="logo">
                    <!-- <img src="images/hi.png" alt=""> -->
                    <a href="index.html">Freelancer Job Board</a>
                </div>
                <ul class="menu">
                    <li><a href="#">Home</a></li>

                    <li><a href="admin.php">Client Dashboard</a></li>
                    
                    <li><a href="client-own-posted-job.php">Your Posted Job</a></li>


                </ul>
                <div class="search-box">
                    <input type="text" placeholder="Search here...">
                    <a href="#"><i class="fas fa-search"></i></a>

                </div>
                <!-- dropdown profile menu bar -->




            </div>
            </div>
        </nav>

    </header>
    <div class="container glass" style="width:500px;margin-top: 100px;">
        <h2>Job Posting Form</h2>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <!-- <label for="user_id" style="margin-left: -10px;">Client ID:</label>
        <input type="number" name="client_id" id="client_id" required>     -->
            <br> <br>
            <label for="jobCategory" style="margin-left: -50px;">Job Category: </label>
            <select style="width: 150px;" name="jobCategory" id="jobCategory" required>
                <option value="Website Design">Website Design</option>
                <option value="Graphic Design">Graphic Design</option>
                <option value="Website Development">Website Development</option>
                <option value="Mobile App Development">Mobile App Development</option>
                <option value="Software Development">Software Development</option>
                <option value="E-commerce Development">E-commerce Development</option>
                <option value="Article Writing">Article Writing</option>
                <option value="Blog Writing">Blog Writing</option>
                <option value="Copywriting">Copywriting</option>
                <option value="Technical Writing">Technical Writing</option>
                <option value="Creative Writing">Creative Writing</option>
                <option value="Logo Design">Logo Design</option>
                <option value="Illustration">Illustration</option>
                <option value="Animation">Animation</option>
                <option value="Video Editing">Video Editing</option>
                <option value="Data Entry">Data Entry</option>
                <option value="Excel">Excel</option>
                <option value="Data Processing">Data Processing</option>
                <option value="Project Management">Project Management</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Physics">Physics</option>
                <option value="Internet Marketing">Internet Marketing</option>
                <option value="SEO">SEO</option>
                <option value="Social Media Marketing">Social Media Marketing</option>
                <option value="Advertising">Advertising</option>
                <option value="Sales">Sales</option>
                <option value="Translation">Translation</option>
                <option value="Proofreading">Proofreading</option>
                <option value="Transcription">Transcription</option>
                <option value="Language Tutoring">Language Tutoring</option>
                <option value="Subtitling">Subtitling</option>
                <option value="Network Administration">Network Administration</option>
                <option value="IT Support">IT Support</option>
                <option value="Cybersecurity">Cybersecurity</option>
                <option value="Database Administration">Database Administration</option>
                <option value="System Admin">System Admin</option>
                <option value="Accounting">Accounting</option>
                <option value="Financial Analysis">Financial Analysis</option>
                <option value="Business Analysis">Business Analysis</option>
                <option value="Business Plans">Business Plans</option>
                <option value="Consulting">Consulting</option>
                <option value="Customer Support">Customer Support</option>
                <option value="Phone Support">Phone Support</option>
                <option value="Technical Support">Technical Support</option>
                <option value="Office Management">Office Management</option>
                <option value="Email Handling">Email Handling</option>
                <option value="Calendar Management">Calendar Management</option>
                <option value="Research Writing">Research Writing</option>
                <option value="Report Writing">Report Writing</option>
                <option value="Academic Writing">Academic Writing</option>
                <option value="Scientific Research">Scientific Research</option>
                <option value="Literature Review">Literature Review</option>
                <option value="Android Development">Android Development</option>
                <option value="iOS Development">iOS Development</option>
                <option value="Mobile App Testing">Mobile App Testing</option>
                <option value="Mobile UI/UX Design">Mobile UI/UX Design</option>
                <option value="Mobile Game Development">Mobile Game Development</option>

                <!-- Add more options as needed -->
            </select>

            <br><br>

            <label for="requiredSkills" style="margin-left: -10px;">Required Skills:</label>
            <input type="text" name="requiredSkills" id="requiredSkills" required>

            <br><br>

            <label for="workingHour" style="margin-left: -10px;">Working Hour:</label>
            <input type="number" name="workingHour" id="workingHour" required>
            <!-- <img src="../1.My-Profile-Icon/project-details.php" alt=""> -->
            <br><br>

            <label for="projectSize" style="margin-left: -30px;">Size of Project:</label>
            <select style="width: 150px;" name="projectSize" id="projectSize" required>
                <option value="Large">Large</option>
                <option value="Medium">Medium</option>
                <option value="Small">Small</option>
                <!-- Add more options as needed -->
            </select>

            <br><br>

            <label for="budget">Budget:</label>
            <input type="number" name="budget" id="budget" required>

            <br><br>

            <input type="submit" value="Submit" id="submit">
        </form>
    </div>

</body>

</html>