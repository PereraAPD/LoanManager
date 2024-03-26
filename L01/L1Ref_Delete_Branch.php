<?php
require 'db_connection.php';

if (isset($_GET['id'])) {
    $branchCode = $_GET['id'];

    // Prepare and execute SQL query to delete the branch record
    $stmt = $conn->prepare("DELETE FROM bankbranch WHERE Branchcode = ?");
    $stmt->bind_param("s", $branchCode);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Branch code not provided.";
}
?>
