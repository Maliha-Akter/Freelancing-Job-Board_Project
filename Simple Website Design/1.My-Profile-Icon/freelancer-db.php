<?php
$con = mysqli_connect("localhost", "root", "", "Freelancer-Job-Board-Project");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
