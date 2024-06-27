<?php

function applyForJob($con, $freelancerId, $freelancerEmail, $jobId, $clientId, $targetPath) {
    // Insert data into the job_apply table
    $query = "INSERT INTO job_apply (freelancer_id, client_id, JobId, freelancer_email, file_resume) 
              VALUES (?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "iisss", $freelancerId, $clientId, $jobId, $freelancerEmail, $targetPath);

        if (mysqli_stmt_execute($stmt)) {
            return true; // Application successful
        } else {
            return false; // Failed to execute query
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        return false; // Failed to prepare statement
    }
}

?>
