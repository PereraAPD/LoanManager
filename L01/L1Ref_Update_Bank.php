<?php
require 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $bankCode = $_POST['BankCode'];
    $bankName = $_POST['bankName'];
    $shortName = $_POST['shortName'];
    $telNumber = $_POST['telNumber'];
    $faxNumber = $_POST['faxNumber'];

    // Prepare and execute SQL query
    $stmt = $conn->prepare("UPDATE bankmasterfile SET BankName = ?, BankShortName = ?, telephoneNo = ?, fax = ? WHERE BankCode = ?");
    $stmt->bind_param("sssss", $bankName, $shortName, $telNumber, $faxNumber, $bankCode);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the bank page
    header("Location: http://localhost/LoanManager/L01/L01.php?file=L1Ref_Bank.php#");
    exit;
}
