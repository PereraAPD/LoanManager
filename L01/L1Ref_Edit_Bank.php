<?php
require 'db_connection.php';

// Check if the bank code is provided
if (isset($_GET['id'])) {
    $bankCode = $_GET['id'];

    // Fetch bank details from the database
    $sql = "SELECT * FROM bankmasterfile WHERE BankCode = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $bankCode);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Bank details retrieved, now load the edit form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bank</title>
    <!-- Add your stylesheet links here -->
</head>
<body>
    <form action="L1Ref_Update_Bank.php" method="post">
        <input type="hidden" name="BankCode" value="<?php echo $row['BankCode']; ?>">
        <label for="bankName">Bank Name:</label>
        <input type="text" id="bankName" name="bankName" value="<?php echo $row['BankName']; ?>" required>

        <label for="shortName">Short Name:</label>
        <input type="text" id="shortName" name="shortName" value="<?php echo $row['BankShortName']; ?>" required>

        <label for="telNumber">Telephone Number:</label>
        <input type="tel" id="telNumber" name="telNumber" value="<?php echo $row['telephoneNo']; ?>" required>

        <label for="faxNumber">Fax Number:</label>
        <input type="tel" id="faxNumber" name="faxNumber" value="<?php echo $row['fax']; ?>" required>

        <button type="submit">Update</button>
    </form>
</body>
</html>
<?php
    } else {
        echo "Bank not found.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Bank code not provided.";
}
?>
