<?php
require 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the district name from the form
    $districtName = $_POST['DistrictName'];

    // Prepare SQL and bind parameters
    $stmt = $conn->prepare("INSERT INTO district (DistrictName) VALUES (?)");
    $stmt->bind_param("s", $districtName);

    // Execute the query
    if ($stmt->execute()) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

    // Redirect to the district list page
    header("Location: http://localhost/LoanManager/L01/L01.php?file=L1Ref_District.php#");
    exit;
} else {
    // If the form wasn't submitted, redirect to the form page or show an error
    echo "Error: Form data was not submitted.";
    // Alternatively, redirect back to form or homepage
    // header("Location: form_page_or_homepage.php");
}
