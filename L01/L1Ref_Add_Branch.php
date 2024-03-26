<?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $bank = $_POST['bank'];
    $branchCode = $_POST['branchCode'];
    $district = $_POST['district'];
    $branchName = $_POST['branchName'];
    $telNumber = $_POST['telNumber'];
    $faxNumber = $_POST['faxNumber'];

    // Prepare and execute SQL query to insert new branch
    $stmt = $conn->prepare("INSERT INTO bankbranch (BankName, Branchcode, District, BranchName, Phone, Fax) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $bank, $branchCode, $district, $branchName, $telNumber, $faxNumber);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "New branch added successfully.";
    } else {
        echo "Error adding branch: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
