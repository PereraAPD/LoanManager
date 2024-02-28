<!-- esBank/Bank.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Common Reference - Dashboard</title>
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>
    <!-- Tab bar -->
    <div class="tab-bar">
        <a href="#" onclick="loadContent('Bank.php')">Bank</a>
        <a href="#" onclick="loadContent('Branch.php')">Branch</a>
        <a href="#" onclick="loadContent('District.php')">District</a>
        <a href="#" onclick="loadContent('Division.php')">Division</a>
    </div>
<!-- Bank Form -->
<!-- esBranch/Branch.php -->

<!-- Branch Form -->
<form action="add_branch.php" method="post">
    <label for="bankName">Bank Name:</label>
    <!-- Dropdown with options for bank names -->

    <label for="branchCode">Branch Code:</label>
    <input type="text" id="branchCode" name="branchCode" required>

    <label for="district">District:</label>
    <!-- Dropdown with options for districts -->

    <label for="branchName">Branch Name:</label>
    <input type="text" id="branchName" name="branchName" required>

    <label for="telNumber">Telephone Number:</label>
    <input type="tel" id="telNumber" name="telNumber" required>

    <label for="faxNumber">Fax Number:</label>
    <input type="tel" id="faxNumber" name="faxNumber" required>

    <button type="submit">Add</button>
    <button type="reset">New</button>
</form>

<!-- Display Branch Details -->
<table>
    <thead>
        <tr>
            <th>Bank Name</th>
            <th>Branch Code</th>
            <th>District</th>
            <th>Branch Name</th>
            <th>Telephone</th>
            <th>Fax</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Fetch and display branch details from the database -->
        <!-- Each row should have options for edit and delete -->
    </tbody>
</table>

</body>
</html>