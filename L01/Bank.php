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
    <div class="container">
        <!-- Form container -->
        <div class="form-container">
            <br>
<!-- Bank Form -->

<form action="add_bank.php" method="post">
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
        <!-- Fetch and display bank details from the database -->
        <!-- Each row should have options for edit and delete -->
    </tbody>
</table>
</div>
    </div>
</body>
</html>
