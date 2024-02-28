<!-- BankWiseReport.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Wise Report - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>

    <!-- Content area -->
    <div id="content">
        <h1>Bank Wise Report</h1>

        <!-- Bank Wise Report Form -->
        <form id="bankWiseReportForm">
            <label for="fromDate">From Date:</label>
            <input type="date" id="fromDate" name="fromDate" required>

            <label for="toDate">To Date:</label>
            <input type="date" id="toDate" name="toDate" required>

            <label for="loanScheme">Loan Scheme:</label>
            <select id="loanScheme" name="loanScheme" required>
                <!-- Populate with loan scheme options dynamically -->
                <option value="scheme1">Loan Scheme 1</option>
                <option value="scheme2">Loan Scheme 2</option>
                <!-- Add more options as needed -->
            </select>

            <label for="bank">Bank:</label>
            <select id="bank" name="bank" required>
                <!-- Populate with bank options dynamically -->
                <option value="bank1">Bank 1</option>
                <option value="bank2">Bank 2</option>
                <!-- Add more options as needed -->
            </select>

            <label for="addSummary">Add Summary:</label>
            <input type="checkbox" id="addSummary" name="addSummary">

            <button type="button" onclick="printBankWiseReport()">Print Report</button>
        </form>

        <!-- Display area for the bank-wise report -->
        <div id="reportDisplay">
            <!-- This is where the bank-wise report will be displayed -->
        </div>
    </div>

    <!-- Include your JavaScript file (if needed) -->
    <script src="script.js"></script>
</body>
</html>
