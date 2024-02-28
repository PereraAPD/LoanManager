<!-- FieldVisitReport.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Field Visit Report - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>

    <!-- Content area -->
    <div id="content">
        <h1>Field Visit Report</h1>

        <!-- Field Visit Report Form -->
        <form id="fieldVisitReportForm">
            <label for="fromDate">From Date:</label>
            <input type="date" id="fromDate" name="fromDate" required>

            <label for="toDate">To Date:</label>
            <input type="date" id="toDate" name="toDate" required>

            <label for="scheme">Loan Scheme:</label>
            <select id="scheme" name="scheme" required>
                <!-- Populate with loan scheme options dynamically -->
                <option value="jayaIsura">Jaya Isura</option>
                <option value="greenLoan">Green Loan</option>
                <!-- Add more options as needed -->
            </select>

            <label for="district">District:</label>
            <select id="district" name="district" required>
                <!-- Populate with district options dynamically -->
                <option value="district1">District 1</option>
                <option value="district2">District 2</option>
                <!-- Add more options as needed -->
            </select>

            <label for="bank">Bank:</label>
            <select id="bank" name="bank" required>
                <!-- Populate with bank options dynamically -->
                <option value="bank1">Bank 1</option>
                <option value="bank2">Bank 2</option>
                <!-- Add more options as needed -->
            </select>

            <button type="button" onclick="printFieldVisitReport()">Print Report</button>
        </form>

        <!-- Display area for the field visit report -->
        <div id="fieldVisitReportDisplay">
            <!-- This is where the field visit report will be displayed -->
        </div>
    </div>

    <!-- Include your JavaScript file (if needed) -->
    <script src="script.js"></script>
</body>
</html>
