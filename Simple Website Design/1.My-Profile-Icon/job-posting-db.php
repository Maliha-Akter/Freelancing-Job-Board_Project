<?php
$conn = mysqli_connect("localhost", "root", "", "Freelancer-Job-Board-Project");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
