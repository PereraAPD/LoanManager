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
    <link rel="stylesheet" href="AddNewStyle.css">
    <!-- Include any additional CSS files if needed -->
    
</head>
<body>
    <div class="container">
        <!-- Content -->
        <div class="content">
            <!-- Form for Target Group Category -->
            <div class="form-container">
                <input type="text" id="groupCategory" placeholder="Group Category">
                <button type="button" class="add-button" onclick="addGroup()">Add</button> <!-- Updated button -->
                <button type="button" class="new-button" onclick="clearForm()">New</button> <!-- Updated button -->
            </div>

            <!-- Grid for added items -->
            <table class="reference-grid">
                <thead>
                    <tr>
                        <th>Delete</th>
                        <th>Edit</th>
                        <th>Group Category</th>
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
    <script>
        // JavaScript functions
        function addGroup() {
            var groupCategory = document.getElementById("groupCategory").value;
            if (groupCategory.trim() !== "") {
                var table = document.getElementById("addedItems");
                var newRow = table.insertRow(table.rows.length);
                var cell1 = newRow.insertCell(0);
                var cell2 = newRow.insertCell(1);
                var cell3 = newRow.insertCell(2);
                cell1.innerHTML = '<button onclick="deleteRow(this)">Delete</button>';
                cell2.innerHTML = '<button onclick="editRow(this)">Edit</button>';
                cell3.innerHTML = groupCategory;
            }
        }

        function deleteRow(row) {
            var rowIndex = row.parentNode.parentNode.rowIndex;
            document.getElementById("addedItems").deleteRow(rowIndex);
        }

        function editRow(row) {
            // You can implement edit functionality here if needed
        }

        function clearForm() {
            document.getElementById("groupCategory").value = "";
        }
    </script>
</body>
</html>
