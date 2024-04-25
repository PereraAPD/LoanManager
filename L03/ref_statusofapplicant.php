<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ministryoffinance";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add new applicant status
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['applicantStatus']) && !empty($_POST['applicantStatus'])) {
        $applicantStatus = $_POST['applicantStatus'];
        $sql = "INSERT INTO govinavapplicantstatus (ApplicantStatus) VALUES ('$applicantStatus')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New status added successfully');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "<script>alert('Please enter a valid applicant status');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reference Page</title>
    <!-- Include CSS files -->
    <link rel="stylesheet" href="style.css">
    <!-- Include any additional CSS files if needed -->
    <style>
        /* Add any additional CSS specific to this page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #000; /* Black font color */
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .heading {
            text-align: center;
            margin-bottom: 20px;
        }
        .horizontal-nav {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-bottom: 20px;
        }
        .horizontal-nav li {
            margin-right: 10px;
        }
        .horizontal-nav li a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #f5f5f5;
            color: #333;
        }
        .horizontal-nav li a:hover {
            background-color: #e0e0e0;
        }
        .form-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container input[type="text"] {
            width: 200px;
            padding: 5px;
            margin-right: 10px;
        }
        .form-container button {
            width: 80px; /* Smaller width */
            padding: 5px; /* Smaller padding */
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            font-size: 12px; /* Smaller font size */
        }
        .form-container button.add-button {
            margin-right: 5px;
        }
        .form-container button.new-button {
            padding: 5px; /* Smaller padding */
        }
        .form-container button:hover {
            background-color: #45a049;
        }
        /* Grid styles */
        .reference-grid {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .reference-grid th, .reference-grid td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            color: #000; /* Black font color */
        }
        .reference-grid th {
            background-color: #f2f2f2;
        }
        .reference-grid tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .reference-grid tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="heading">Status of Applicant</h1>

        <!-- Horizontal Navigation Bar -->
        <ul class="horizontal-nav">
            <li><a href="#">Status of Applicant</a></li>
            <li><a href="#">Loan Type</a></li>
            <li><a href="#">Security</a></li>
        </ul>

        <!-- Form for Status of Applicant -->
        <div class="form-container">
            <form id="statusForm" method="POST">
                <input type="text" id="applicantStatus" name="applicantStatus" placeholder="Applicant Status">
                <button type="submit" class="add-button">Add</button>
                <button type="button" class="new-button" onclick="clearForm()">New</button>
            </form>
        </div>

        <!-- Reference Grid -->
        <table class="reference-grid">
            <thead>
                <tr>
                    <th>Delete</th>
                    <th>Edit</th>
                    <th>Status of Applicant</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Populate table with existing data from the database
                    $sql = "SELECT * FROM govinavapplicantstatus";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td><a href='#' class='delete-btn'>Delete</a></td>";
                            echo "<td><a href='#' class='edit-btn'>Edit</a></td>";
                            echo "<td>".$row['ApplicantStatus']."</td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Include JavaScript files -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include any additional JavaScript files if needed -->
    <script>
        // Add any specific JavaScript for this page
        // Example: Form submission, AJAX requests, etc.
        // Example functions:
        function clearForm() {
            document.getElementById("statusForm").reset();
        }
    </script>
</body>
</html>

