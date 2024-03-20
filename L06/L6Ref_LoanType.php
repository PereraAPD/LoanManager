<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Type</title>
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
        <h1 class="heading">Loan Type</h1>

        <!-- Horizontal Navigation Bar -->
        <!-- <ul class="horizontal-nav">
            <li><a href="#">Status of Applicant</a></li>
            <li><a href="#">Sector</a></li>
            <li><a href="#">Security</a></li>
            <li><a href="#">Loan Type</a></li>
            <li><a href="#">Economic Eligible Activity</a></li>
        </ul> -->

        <!-- Form for Status of Applicant -->
        <div class="form-container">
            <input type="text" id="loantype" placeholder="Loan Type">
            <button type="button" class="add-button" onclick="addStatus()">Add</button> <!-- Updated button -->
            <button type="button" class="new-button" onclick="clearForm()">New</button> <!-- Updated button -->
        </div>

        <!-- Reference Grid -->
        <table class="reference-grid">
            <thead>
                <tr>
                    <th>Delete</th>
                    <th>Edit</th>
                    <th>Loan Type</th>
                </tr>
            </thead>
            <tbody>
                <!-- Grid rows will be dynamically populated -->
                <!-- Example: -->
                <!-- <tr>
                    <td><a href="#" class="delete-btn">Delete</a></td>
                    <td><a href="#" class="edit-btn">Edit</a></td>
                    <td>Status 1</td>
                </tr> -->
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
        function addStatus() {
            // Add logic to add a new status
        }

        function clearForm() {
            // Add logic to clear the form fields
        }
    </script>
</body>
</html>