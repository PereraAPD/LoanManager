<?php
// Approve1.php

// Include any necessary PHP files here

// Check for any authentication or session requirements

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve1 Page</title>
    <!-- Include CSS files -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form_style.css">
    <!-- Include any additional CSS files if needed -->
    <style>
        /* Add any additional CSS specific to this page */
    </style>
</head>
<body>

    <!-- Content goes here -->
        <!-- Add your content here -->
        <h1>Approve1</h1>
        <!-- Add more content as needed -->
        <!-- Add any specific content for Approve1 page -->

        <!-- Example grid with search functionality -->
        <h2>Search and Filter Grid</h2>
        <input type="text" id="searchField" placeholder="Search...">
        <table id="approveGrid">
            <!-- Grid headers -->
            <thead>
                <tr>
                    <th>View</th>
                    <th><input type="checkbox" id="selectAll"> All</th>
                    <th>No.</th>
                    <th>Registration No.</th>
                    <th>Amount</th>
                    <th>RP</th>
                    <th>ER%</th>
                    <th>BIR%</th>
                    <th>ISR%</th>
                    <th>Entered By</th>
                    <th>Entered Date</th>
                    <th>1st Approved By</th>
                    <th>1st Approved Date</th>
                    <th>2nd Approved By</th>
                    <th>2nd Approved Date</th>
                </tr>
            </thead>
            <tbody>
                <!-- Grid rows will be dynamically populated -->
            </tbody>
        </table>

    <!-- Include JavaScript files -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
    <!-- Include any additional JavaScript files if needed -->
    <script>
        // Add any specific JavaScript for this page
        // Example: Grid search functionality
        // $(document).ready(function() {
        //     // Implement grid search functionality
        // });
    </script>
</body>
</html>
