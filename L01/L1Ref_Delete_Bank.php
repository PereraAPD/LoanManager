<?php
require 'db_connection.php';

// Check if the bank code is provided
if (isset($_GET['id'])) {
    $bankCode = $_GET['id'];

    // Prepare and execute SQL query to delete the bank record
    $stmt = $conn->prepare("DELETE FROM bankmasterfile WHERE BankCode = ?");
    $stmt->bind_param("s", $bankCode);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the bank page
    header("Location: http://localhost/LoanManager/L01/L01.php?file=L1Ref_Bank.php#");
    exit;
} else {
    echo "Bank code not provided.";
}