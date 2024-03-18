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
<!-- Bank Form -->
<!-- esBranch/Branch.php -->
<div class="container">
        <!-- Form container -->
        <div class="form-container">
<!-- Branch Form -->
<form action="add_branch.php" method="post">
    <label for="bankName">Bank Name:</label>
    <select id="bank" name="bank" required>
    <option value="" disabled selected>Select Bank</option>
        <option value="BOC">Bank of Ceylon</option>
        <option value="NSB">National Savings Bank</option>
        <option value="PB">People's Bank</option>
    </select>

    <label for="branchCode">Branch Code:</label>
    <input type="text" id="branchCode" name="branchCode" required>

    <label for="district">District:</label>
    <select id="district" name="district" required>
    <option value="" disabled selected>Select District</option>
        <option value="gampaha">Gampaha</option>
        <option value="colombo">Colombo</option>
        <option value="Kandy">Kandy</option>
    </select>

    <label for="branchName">Branch Name:</label>
    <input type="text" id="branchName" name="branchName" required>

    <label for="telNumber">Telephone Number:</label>
    <input type="tel" id="telNumber" name="telNumber" required>

    <label for="faxNumber">Fax Number:</label>
    <input type="tel" id="faxNumber" name="faxNumber" required>

    <button type="submit">Add</button>
    <button type="reset">New</button>
</form>
        </div>
<!-- Display Branch Details -->
<div class="table-container">
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
</div>
</div>
</body>
</html>