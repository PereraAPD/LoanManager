<!-- esDevision/esDevisionUI.php -->
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
<!-- Division Form -->
<form action="add_division.php" method="post">
    <label for="district">District:</label>
    <select id="district" name="district" required>
    <option value="" disabled selected>Select District</option>
        <option value="gampaha">Gampaha</option>
        <option value="colombo">Colombo</option>
        <option value="Kandy">Kandy</option>
    </select>

    <label for="division">Division:</label>
    <input type="text" id="division" name="division" required>

    <button type="submit">Add</button>
    <button type="reset">New</button>
</form>
        </div>
        <div class="table-container">
<!-- Display Division Details -->
<table>
    <thead>
        <tr>
            <th>District</th>
            <th>Division</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Fetch and display division details from the database -->
        <!-- Each row should have options for edit and delete -->
    </tbody>
</table>
</div>
</div>
</body>
</html>