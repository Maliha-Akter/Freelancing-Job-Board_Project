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

                    <li><a href="project-table.php">Project</a></li>
                    
                    <li><a href="../../../images/job-container.html">Search For Job</a></li>


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
        <h1>Upload Your Resume</h1>
        <div class="media-body ml-4">
            <!-- <p>Click on the "Choose File" button to upload a file:</p> -->

            <form action="">
                <!-- <input type="file" id="myFile" name="filename"> <br> -->
                <input type="submit" placeholder="Apply For Job">
            </form>
        </div>
        
    </div>

</body>

</html>