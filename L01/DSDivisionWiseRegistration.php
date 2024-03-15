<!-- DsDivisionWiseRegistration.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ds Division Wise Registration - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>

    <!-- Content area -->
        <h1>Ds Division Wise Registration</h1>

        <!-- DS Division Wise Registration Form -->
        <form id="dsDivisionWiseRegistrationForm">
            <label for="loanScheme">Loan Scheme:</label>
            <select id="loanScheme" name="loanScheme" required>
                <!-- Populate with loan scheme options dynamically -->
                <option value="scheme1">Loan Scheme 1</option>
                <option value="scheme2">Loan Scheme 2</option>
                <!-- Add more options as needed -->
            </select>

            <label for="fromDate">From Date:</label>
            <input type="date" id="fromDate" name="fromDate" required>

            <label for="toDate">To Date:</label>
            <input type="date" id="toDate" name="toDate" required>

            <label for="province">Province:</label>
            <select id="province" name="province" required>
                <!-- Populate with province options dynamically -->
                <option value="province1">Province 1</option>
                <option value="province2">Province 2</option>
                <!-- Add more options as needed -->
            </select>

            <label for="district">District:</label>
            <select id="district" name="district" required>
                <!-- Populate with district options dynamically -->
                <option value="district1">District 1</option>
                <option value="district2">District 2</option>
                <!-- Add more options as needed -->
            </select>

            <label for="dsDivision">DS Division:</label>
            <select id="dsDivision" name="dsDivision" required>
                <!-- Populate with DS division options dynamically -->
                <option value="dsDivision1">DS Division 1</option>
                <option value="dsDivision2">DS Division 2</option>
                <!-- Add more options as needed -->
            </select>

            <button type="button" onclick="printDsDivisionWiseRegistration()">Print Registration</button>
        </form>

        <!-- Display area for the DS division-wise registration -->
        <div id="registrationDisplay">
            <!-- This is where the DS division-wise registration will be displayed -->
        </div>

    <!-- Include your JavaScript file (if needed) -->
    <script src="script.js"></script>
</body>
</html>
