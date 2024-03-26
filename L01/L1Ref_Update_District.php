<?php
require 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $district_id = $_POST['ID'];
    $district_name = $_POST['DistrictName'];

    // Update the district in the database
    $sql = "UPDATE district SET DistrictName = ? WHERE ID = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $district_name, $district_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}

// Redirect back to the district list page
header("Location: http://localhost/LoanManager/L01/L01.php?file=L1Ref_District.php#");
exit;