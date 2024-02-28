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
        <h1><center>Search Loans</center></h1>
        <form id="searchForm">
            <label for="nic">Enter NIC Number:</label>
            <input type="text" id="nic" name="nic" placeholder="Enter NIC Number" required>
            <button type="button" onclick="searchLoans()">Search</button>
        </form>

        <!-- Display search results in a table -->
        <div id="searchResults">
            <!-- Results will be displayed here -->
        </div>
    </div>

    <!-- Include your JavaScript file (if needed) -->
    <script src="script.js"></script>
</body>
</html>
