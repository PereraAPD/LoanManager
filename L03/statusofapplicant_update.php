<?php
// update.php

// Include database connection code
include_once 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if ID and status are provided
    if(isset($_POST['id']) && isset($_POST['status']) && !empty($_POST['id']) && !empty($_POST['status'])) {
        $id = $_POST['id'];
        $status = $_POST['status'];

        // Prepare SQL statement to update record with the given ID
        $sql = "UPDATE govinavapplicantstatus SET ApplicantStatus = '$status' WHERE ID = $id";

        if ($conn->query($sql) === TRUE) {
            // Record updated successfully, redirect back to the page
            header("Location: ref_statusofapplicant.php");
            exit();
        } else {
            // Error occurred while updating record
            echo "Error: " . $conn->error;
        }
    } else {
        // Handle error if ID or status is not provided
        echo "Error: ID or status not provided.";
    }
} else {
    // Handle error if form is not submitted using POST method
    echo "Error: Form not submitted.";
}
?>
