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
        /* CSS to position total amount in the top right corner */
        #totalAmount {
            position: fixed;
            top: 100px; /* Adjusted top position */
            right: 20px;
            background-color: #fff;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 250px; /* Increased width */
            text-align: center; /* Center the text */
            z-index: 9999; /* Ensure it's on top of other elements */
        }
        #content {
            margin-top: 150px; /* Adjusted margin to make space for the fixed element */
        }
    </style>
</head>
<body>

    <!-- Content goes here -->
    <div id="content">
        <!-- Add your content here -->
        <h1>View Approved</h1>
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
    </div>

    <!-- Display area for total amount -->
    <div id="totalAmount">Total: 0</div>

    <!-- Include JavaScript files -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
    <!-- Include any additional JavaScript files if needed -->
    <script>
        // Add any specific JavaScript for this page
        // Example: Grid search functionality

        // Function to calculate and display total amount
        function calculateTotalAmount() {
            let totalAmount = 0;
            // Iterate through each row in the grid
            $('#approveGrid tbody tr').each(function() {
                // Extract the amount from the current row and add it to the total
                totalAmount += parseFloat($(this).find('td:eq(4)').text());
            });
            // Display the total amount in the designated area
            $('#totalAmount').text('Total: ' + totalAmount.toFixed(2));
        }

        // Call the function to calculate and display the total amount when the page loads
        $(document).ready(function() {
            calculateTotalAmount();
        });
    </script>
</body>
</html>