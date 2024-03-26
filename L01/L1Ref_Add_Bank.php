<?php
require 'db_connection.php';
// Fetch the current maximum bank code value from the bank table
$sql = "SELECT MAX(BankCode) AS maxCode FROM bankmasterfile";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$nextBankCode = $row['maxCode'] + 1;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $bankName = $_POST['bankName'];
    $shortName = $_POST['shortName'];
    $telNumber = $_POST['telNumber'];
    $faxNumber = $_POST['faxNumber'];

    // Prepare and execute SQL query
    $stmt = $conn->prepare("INSERT INTO bankmasterfile (BankCode,BankName, BankShortName, telephoneNo, fax) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $nextBankCode, $bankName, $shortName, $telNumber, $faxNumber);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the bank page
    header("Location: http://localhost/LoanManager/L01/L01.php?file=L1Ref_Bank.php#");
    exit;
}
