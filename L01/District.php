<!-- esDistrict/esdistrictUI.php -->
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
<!-- District Form -->
<form action="add_district.php" method="post">
    <label for="districtName">District Name:</label>
    <input type="text" id="districtName" name="districtName" required>

    <button type="submit">Add</button>
    <button type="reset">New</button>
</form>

<!-- Display District Details -->
<table>
    <thead>
        <tr>
            <th>District Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Fetch and display district details from the database -->
        <!-- Each row should have options for edit and delete -->
    </tbody>
</table>
</body>
</html>