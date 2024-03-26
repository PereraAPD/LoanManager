<?php
require 'db_connection.php';

// Get the district ID
$district_id = isset($_GET['id']) ? $_GET['id'] : '';

// SQL to delete a record
$sql = "DELETE FROM district WHERE ID = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $district_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . $conn->error;
}

$stmt->close();
$conn->close();

// Redirect back to the district list page
header("Location: http://localhost/LoanManager/L01/L01.php?file=L1Ref_District.php#");
exit;
