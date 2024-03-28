<?php
// Your existing database connection code
require 'db_connection.php'; // Adjust the path as necessary

// Get division ID from the URL
$divisionId = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Division ID not specified.');

// Fetch division data
$sql = "SELECT * FROM devision WHERE ID = ?";
if($stmt = $conn->prepare($sql)){
    $stmt->bind_param("i", $divisionId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if($row){
        // Data for the division found
        $district = $row['DistrictID'];
        $divisionName = $row['Devisiondiscription'];
    } else{
        // No result
        echo "No division found with that ID.";
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . $conn->error;
}

// Close statement
$stmt->close();

// Close connection
$conn->close();