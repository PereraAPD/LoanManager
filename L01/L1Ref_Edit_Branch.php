<?php
require 'db_connection.php';

if (isset($_GET['id'])) {
    $branchCode = $_GET['id'];

    // Fetch branch details from the database
    $sql = "SELECT b.*, bm.BankName, d.DistrictName
    FROM bankbranch b
    INNER JOIN bankmasterfile bm ON b.BankID = bm.BankID
    INNER JOIN district d ON b.District = d.ID
    WHERE b.ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $branchCode);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Branch details retrieved, now load the edit form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Branch</title>
    <!-- Add your stylesheet links here -->
</head>
<body>
    <form action="update_branch.php" method="post">
        <input type="hidden" name="branchCode" value="<?php echo $row['Branchcode']; ?>">
        <label for="bank">Bank Name:</label>
        <input type="text" id="bank" name="bank" value="<?php echo $row['BankName']; ?>" required>

        <label for="district">District:</label>
        <input type="text" id="district" name="district" value="<?php echo $row['District']; ?>" required>

        <label for="branchName">Branch Name:</label>
        <input type="text" id="branchName" name="branchName" value="<?php echo $row['BranchName']; ?>" required>

        <label for="telNumber">Telephone Number:</label>
        <input type="tel" id="telNumber" name="telNumber" value="<?php echo $row['phone']; ?>" required>

        <label for="faxNumber">Fax Number:</label>
        <input type="tel" id="faxNumber" name="faxNumber" value="<?php echo $row['fax']; ?>" required>

        <button type="submit">Update</button>
    </form>
</body>
</html>
<?php
    } else {
        echo "Branch not found.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Branch code not provided.";
}
?>
