<!-- SearchUI.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Loans - Dashboard</title>
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <link rel="stylesheet" href="style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>
    <!-- Content area -->
    <div id="content">
        <div class="container">
        <div class="form-container">
        <h2><center>Search Loans</center></h2>
        <form id="searchForm">
            <label for="nic">Enter NIC Number:</label>
            <input type="text" id="nic" name="nic" placeholder="Enter NIC Number" required>
            <button type="button" onclick="searchLoans()">Search</button>
        </form>
        </div>

        <!-- Display search results in a table -->
        <div class="table-container" id="search-results">
        <h2><center>Search Results</center></h2>
    <table>
        <thead>
            <tr>
                <th>Loan Scheme</th>
                <th>Loan Registration No</th>
                <th>Date of Registration</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through search results and display each row -->
            <?php
            // Example PHP code to fetch search results from the database and display them
            // Replace this with actual PHP code to fetch and display search results
            $searchResults = array(
                array("Jaya", "12345", "2024-02-28", "100000"),
                array("Isura", "67890", "2024-03-15", "150000"),
                // Add more rows as needed
            );

            foreach ($searchResults as $result) {
                echo "<tr>";
                echo "<td>" . $result[0] . "</td>";
                echo "<td>" . $result[1] . "</td>";
                echo "<td>" . $result[2] . "</td>";
                echo "<td>" . $result[3] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
        </div>
        </div>
    </div>

    <!-- Include your JavaScript file (if needed) -->
    <script src="script.js"></script>
</body>
</html>
