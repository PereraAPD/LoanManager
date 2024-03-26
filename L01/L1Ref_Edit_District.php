<?php
require 'db_connection.php';

// Get the district ID from the URL
$district_id = isset($_GET['id']) ? $_GET['id'] : '';

// Fetch the district's details
$sql = "SELECT DistrictName FROM district WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $district_id);
$stmt->execute();
$result = $stmt->get_result();
$district = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit District</title>
    <!-- Add your stylesheet links here -->
</head>
<body>
    <form action="L1Ref_Update_District.php" method="post">
        <input type="hidden" name="ID" value="<?php echo $district_id; ?>">
        <label for="DistrictName">District Name:</label>
        <input type="text" id="DistrictName" name="DistrictName" value="<?php echo htmlspecialchars($district['DistrictName']); ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
