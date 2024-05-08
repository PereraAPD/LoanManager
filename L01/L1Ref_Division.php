<!-- esDevision/esDevisionUI.php -->
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
<!-- Division Form -->
<form action="L1Ref_Add_Division.php" method="post">
    <label for="district">District:</label>
    <select id="district" name="district" required>
    <option value="" disabled selected>Select District</option>
        <option value="gampaha">Ampara</option>
        <option value="colombo">Anuradhapura</option>
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
<?php
// Include your database connection code
require 'db_connection.php'; // Adjust the path as necessary

// Fetch all divisions from the database
$sql = "SELECT d.ID, d.Devisiondiscription, dist.DistrictName FROM devision d INNER JOIN district dist ON d.DistrictID = dist.ID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["DistrictName"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["Devisiondiscription"]) . "</td>";
        echo "<td><a href='L1Ref_Edit_Division.php?id=" . $row["ID"] . "'>Edit</a> | <a href='L1Ref_Delete_Division.php?id=" . $row["ID"] . "' onclick='return confirm(\"Are you sure you want to delete this division?\");'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No divisions found</td></tr>";
}
$conn->close();
?>
    </tbody>
</table>
</div>
</div>
</body>
</html>