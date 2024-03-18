<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Type Page</title>
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
        .loan-type-grid {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .loan-type-grid th, .loan-type-grid td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            color: #000; /* Black font color */
        }
        .loan-type-grid th {
            background-color: #f2f2f2;
        }
        .loan-type-grid tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .loan-type-grid tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="heading">Loan Type</h1>

        <!-- Form for Loan Type -->
        <div class="form-container">
            <input type="text" id="loanType" placeholder="Loan Type">
            <button type="button" class="add-button" onclick="addLoanType()">Add</button> <!-- Updated button -->
            <button type="button" class="new-button" onclick="clearForm()">New</button> <!-- Updated button -->
        </div>

        <!-- Loan Type Grid -->
        <table class="loan-type-grid">
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
                    <td>Loan Type 1</td>
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
        function addLoanType() {
            // Add logic to add a new loan type
        }

        function clearForm() {
            // Add logic to clear the form fields
        }
    </script>
</body>
</html>




