<?php
// Function to fetch statuses from the database
function getStatuses($conn)
{
    $sql = "SELECT ID, ApplicantStatus FROM govinavapplicantstatus";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><a href='#' class='delete-btn' data-id='" . $row['ID'] . "'>Delete</a></td>";
            echo "<td><a href='#' class='edit-btn' data-id='" . $row['ID'] . "'>Edit</a></td>";
            echo "<td>" . $row['ApplicantStatus'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No statuses found</td></tr>";
    }
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ministryoffinance";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add status
if (isset($_POST['add_status'])) {
    $status = $_POST['applicantStatus'];
    $sql = "INSERT INTO govinavapplicantstatus (ApplicantStatus) VALUES ('$status')";
    if ($conn->query($sql) === TRUE) {
        // Status added successfully
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Clear form
if (isset($_POST['clear_form'])) {
    // Clear form fields
}

// Close database connection
$conn->close();
?>
