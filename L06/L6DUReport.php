<!-- DailyUploadingReport.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Uploading Report - Loan Scheme 2</title>
    <!-- Add other stylesheet links as needed -->
</head>
<body>

    <h1>Daily Uploading Report - Loan Scheme 2</h1>

    <!-- Form for Daily Uploading Report -->
    <form id="dailyUploadForm">
        <label for="selectBank">Select Bank:</label>
        <select id="selectBank" name="selectBank">
            <!-- Populate options dynamically based on your data -->
            <option value="bank1">Bank 1</option>
            <option value="bank2">Bank 2</option>
            <!-- Add more options as needed -->
        </select>

        <label for="selectLoanScheme">Select Loan Scheme:</label>
        <select id="selectLoanScheme" name="selectLoanScheme">
            <!-- Populate options dynamically based on your data -->
            <option value="scheme1">Loan Scheme 1</option>
            <option value="scheme2">Loan Scheme 2</option>
            <!-- Add more options as needed -->
        </select>

        <button type="button" onclick="printLetter()">Print Letter</button>
        <button type="button" onclick="printAttachment()">Print Attachment</button>
    </form>

    <!-- Add your footer and other scripts if needed -->
</body>
</html>
