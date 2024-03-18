<?php
// Security.php

// Include any necessary PHP files here

// Check for any authentication or session requirements

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Page</title>
    <!-- Include CSS files -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="AddNewStyle.css">
    <!-- Include any additional CSS files if needed -->
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
    <div class="container">
        <!-- Content -->
        <div class="content">
            <!-- Form for Security -->
            <div class="form-container">
                <input type="text" id="security" placeholder="Security">
                <button type="button" class="add-button" onclick="addSecurity()">Add</button> <!-- Updated button -->
                <button type="button" class="new-button" onclick="clearForm()">New</button> <!-- Updated button -->
            </div>

            <!-- Grid for added items -->
            <table class="reference-grid">
                <thead>
                    <tr>
                        <th>Delete</th>
                        <th>Edit</th>
                        <th>District</th>
                    </tr>
                </thead>
                <tbody id="addedItems">
                    <!-- Rows will be dynamically added here -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Include JavaScript files -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include any additional JavaScript files if needed -->
    <script src="script.js"></script>
</body>
</html>
