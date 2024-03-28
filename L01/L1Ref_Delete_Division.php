<?php
// Include your database connection code
require 'db_connection.php'; // Adjust the path as necessary

// Get division ID from the URL or form submission
$divisionId = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Division ID not specified.');

// Prepare a delete statement
$sql = "DELETE FROM devision WHERE id = ?";
if($stmt = $conn->prepare($sql)){
    $stmt->bind_param("i", $divisionId);
    if($stmt->execute()){
        // Redirect back to the division list or display success message
        echo "Division deleted successfully.";
    } else{
        echo "ERROR: Could not execute query: $sql. " + $conn->error;
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " + $conn->error;
}

// Close statement
$stmt->close();

// Close connection
$conn->close();