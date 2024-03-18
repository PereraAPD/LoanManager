<!-- SectorWiseRegistration.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sector Wise Registration - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>

    <!-- Content area -->
        <h1>Sector Wise Registration</h1>

        <!-- Sector Wise Registration Form -->
        <form id="sectorWiseRegistrationForm">
            <label for="fromDate">From Date:</label>
            <input type="date" id="fromDate" name="fromDate" required>

            <label for="toDate">To Date:</label>
            <input type="date" id="toDate" name="toDate" required>

            <label for="sector">Sector:</label>
            <select id="sector" name="sector" required>
                <!-- Populate with sector options dynamically -->
                <option value="sector1">Sector 1</option>
                <option value="sector2">Sector 2</option>
                <!-- Add more options as needed -->
            </select>

            <button type="button" onclick="printSectorWiseRegistration()">Print Registration</button>
        </form>

        <!-- Display area for the sector-wise registration -->
        <div id="registrationDisplay">
            <!-- This is where the sector-wise registration will be displayed -->
        </div>

    <!-- Include your JavaScript file (if needed) -->
    <script src="script.js"></script>
</body>
</html>
