<!-- DailyUploadingReport.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Uploading Report - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>

    <!-- Content area -->
    <div id="content">
        <h1>Daily Uploading Report</h1>

        <!-- Daily Uploading Report Form -->
        <form id="dailyUploadingForm">
            <label for="uploadDate">Date:</label>
            <input type="date" id="uploadDate" name="uploadDate" required>

            <label for="bank">Bank:</label>
            <select id="bank" name="bank" required>
                <!-- Populate with bank options dynamically -->
                <option value="bank1">Bank 1</option>
                <option value="bank2">Bank 2</option>
                <!-- Add more options as needed -->
            </select>

            <label for="loanScheme">Loan Scheme:</label>
            <select id="loanScheme" name="loanScheme" required>
                <!-- Populate with loan scheme options dynamically -->
                <option value="scheme1">Loan Scheme 1</option>
                <option value="scheme2">Loan Scheme 2</option>
                <!-- Add more options as needed -->
            </select>

            <button type="button" onclick="printSummary()">Print Letter</button>
            <button type="button" onclick="printAttachment()">Print Attachment</button>
        </form>

        <!-- Display area for the reports -->
        <div id="reportDisplay">
            <!-- This is where the summary or attachment will be displayed -->
        </div>
    </div>

    <!-- Include your JavaScript file (if needed) -->
    <script src="script.js"></script>
</body>
</html>
