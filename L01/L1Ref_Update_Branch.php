<?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $branchCode = $_POST['branchCode'];
    $bank = $_POST['bank'];
    $district = $_POST['district'];
    $branchName = $_POST['branchName'];
    $telNumber = $_POST['telNumber'];
    $faxNumber = $_POST['faxNumber'];

    // Prepare and execute SQL query to update the branch record
    $stmt = $conn->prepare("UPDATE bankbranch b
    INNER JOIN bankmasterfile bm ON b.BankID = bm.BankID
    INNER JOIN district d ON b.District = d.ID
    SET b.Field1 = ?, bm.Field2 = ?, d.Field3 = ?
    WHERE b.ID = ?");
    $stmt->bind_param("ssssss", $bank, $district, $branchName, $telNumber, $faxNumber, $branchCode);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
