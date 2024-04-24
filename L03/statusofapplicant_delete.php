<?php
// delete.php

// Include database connection code
include_once 'db_connection.php';

// Check if ID is provided
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare SQL statement to delete record with the given ID
    $sql = "DELETE FROM govinavapplicantstatus WHERE ID = $id";

    if ($conn->query($sql) === TRUE) {
        // Record deleted successfully, redirect back to the page
        header("Location: ref_statusofapplicant.php");
        exit();
    } else {
        // Error occurred while deleting record
        echo "Error: " . $conn->error;
    }
} else {
    // Handle error if ID is not provided
    echo "Error: ID not provided.";
}
?>
