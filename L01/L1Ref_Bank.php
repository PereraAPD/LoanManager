<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Common Reference - Dashboard</title>
    <link rel="stylesheet" href="form_style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>
    <div class="container">
        <!-- Form container -->
        <div class="form-container">
<!-- Bank Form -->

<form action="L1Ref_Add_Bank.php" method="post">
    <label for="bankName">Bank Name:</label>
    <input type="text" id="bankName" name="bankName" required>

    <label for="shortName">Short Name:</label>
    <input type="text" id="shortName" name="shortName" required>

    <label for="telNumber">Telephone Number:</label>
    <input type="tel" id="telNumber" name="telNumber" required>

    <label for="faxNumber">Fax Number:</label>
    <input type="tel" id="faxNumber" name="faxNumber" required>

    <button type="submit">Add</button>
    <button type="reset">New</button>
</form>
        </div>
        <div class="table-container">

<!-- Display Bank Details -->
<table>
    <thead>
        <tr>
            <th>Bank Code</th>
            <th>Bank Name</th>
            <th>Short Name</th>
            <th>Telephone</th>
            <th>Fax</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <tbody>
    <?php
    require 'db_connection.php';
    // Fetch and display bank details from the database
    $sql = "SELECT * FROM bankmasterfile";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["BankCode"] . "</td>";
            echo "<td>" . $row["BankName"] . "</td>";
            echo "<td>" . $row["BankShortName"] . "</td>";
            echo "<td>" . $row["telephoneNo"] . "</td>";
            echo "<td>" . $row["fax"] . "</td>";
            echo "<td>";
            echo "<a href='L1Ref_Edit_Bank.php?id=" . $row["BankCode"] . "'>Edit</a>";
            echo " | ";
            echo "<a href='L1Ref_Delete_Bank.php?id=" . $row["BankCode"] . "' onclick='return confirm(\"Are you sure?\");'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No banks found.</td></tr>";
    }
    ?>
</tbody>

    </tbody>
</table>
</div>
    </div>
</body>
</html>
