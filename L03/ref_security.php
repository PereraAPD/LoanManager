<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Page</title>
    <!-- Include CSS files -->
    <link rel="stylesheet" href="style.css">
    <!-- Include any additional CSS files if needed -->
    <style>
        /* Add any additional CSS specific to this page */
        /* Styles for the form container */
        .form-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container input[type="text"] {
            width: 200px;
            padding: 5px;
            margin-right: 10px;
        }
        .heading {
            text-align: center;
            margin-bottom: 20px;
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
        /* Styles for the grid */
        .security-grid {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .security-grid th, .security-grid td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            color: #000; /* Black font color */
        }
        .security-grid th {
            background-color: #f2f2f2;
        }
        .security-grid tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .security-grid tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="heading">Security Page</h1>

        <!-- Form for Security -->
        <div class="form-container">
            <input type="text" id="security" placeholder="Security">
            <button type="button" class="add-button" onclick="addSecurity()">Add</button> <!-- Updated button -->
            <button type="button" class="new-button" onclick="clearForm()">New</button> <!-- Updated button -->
        </div>

        <!-- Security Grid -->
        <table class="security-grid">
            <thead>
                <tr>
                    <th>Delete</th>
                    <th>Edit</th>
                    <th>District</th>
                </tr>
            </thead>
            <tbody>
                <!-- Grid rows will be dynamically populated -->
                <!-- Example: -->
                <!-- <tr>
                    <td><a href="#" class="delete-btn">Delete</a></td>
                    <td><a href="#" class="edit-btn">Edit</a></td>
                    <td>District 1</td>
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
        function addSecurity() {
            // Add logic to add a new security item
        }

        function clearForm() {
            // Add logic to clear the form fields
        }
    </script>
</body>
</html>



