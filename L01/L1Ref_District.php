<!-- esDistrict/esdistrictUI.php -->
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
<!-- District Form -->
<form action="L1Ref_Add_District.php" method="post">
    <label for="DistrictName">District Name:</label>
    <input type="text" id="DistrictName" name="DistrictName" required>

    <button type="submit">Add</button>
    <button type="reset">New</button>
</form>
        </div>
        <div class="table-container">
<!-- Display District Details -->
<table>
    <thead>
        <tr>
            <th>District Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
                    // Include your database connection file here
                    require 'db_connection.php';
                    
                    // Fetch district details from the database
                    $query = "SELECT ID, DistrictName FROM district";
                    $result = mysqli_query($conn, $query);
                    
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['DistrictName']) . "</td>";
                            echo "<td>
                                <a href='L1Ref_Edit_District.php?id=" . $row['ID'] . "'>Modify</a>
                                | 
                                <a href='L1Ref_Delete_District.php?id=" . $row['ID'] . "' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                            </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>No districts found</td></tr>";
                    }
                    ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>