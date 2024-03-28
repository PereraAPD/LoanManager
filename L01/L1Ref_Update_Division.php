<?php
// Include your database connection code
require 'db_connection.php'; // Adjust the path as necessary

// Check if the form data is posted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $divisionId = $_POST['ID'];
    $district = $_POST['DistrictID'];
    $divisionName = $_POST['Devisiondiscription'];

    // Prepare an update statement
    $sql = "UPDATE devision SET DistrictID = ?, Devisiondiscription = ? WHERE ID = ?";
    if($stmt = $conn->prepare($sql)){
        $stmt->bind_param("ssi", $district, $divisionName, $divisionId);
        if($stmt->execute()){
            // Redirect back to the division list or display success message
            echo "Division updated successfully.";
        } else{
            echo "ERROR: Could not execute query: $sql. " + $conn->error;
        }
    } else{
        echo "ERROR: Could not prepare query: $sql. " + $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
