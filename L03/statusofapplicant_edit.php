<?php
// edit.php

// Include database connection code
include_once 'db_connection.php';

// Check if ID is provided
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve record with the given ID from the database
    $sql = "SELECT * FROM govinavapplicantstatus WHERE ID = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Record found, display edit form with pre-filled data
        $row = $result->fetch_assoc();
        $status = $row['ApplicantStatus'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Applicant Status</title>
</head>
<body>
    <h1>Edit Applicant Status</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="status">Applicant Status:</label>
        <input type="text" name="status" id="status" value="<?php echo $status; ?>"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
<?php
    } else {
        // Handle error if record with the given ID is not found
        echo "Error: Record not found.";
    }
} else {
    // Handle error if ID is not provided
    echo "Error: ID not provided.";
}
?>
