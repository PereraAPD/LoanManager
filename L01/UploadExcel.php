<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Excel - Loan Disbursement Daily</title>
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add your stylesheets and other head elements here -->
</head>
<body>

    <h1>Upload Excel - Loan Disbursement Daily</h1>

    <!-- Form for uploading Excel -->
    <form action="upload_handler.php" method="post" enctype="multipart/form-data">
        <label for="loanScheme">Select Loan Scheme:</label>
        <select name="loanScheme" id="loanScheme">
            <!-- Populate with your loan schemes -->
            <option value="jayaIsura">Jaya Isura</option>
            <option value="greenLoan">Green Loan</option>
            <!-- Add more options as needed -->
        </select>

        <label for="file">Choose Excel File:</label>
        <input type="file" name="file" id="file" accept=".xls, .xlsx" required>

        <button type="submit" name="upload">Upload</button>
        <button type="button" onclick="generateReport()">Generate Report</button>
    </form>

    <!-- JavaScript function for generating report -->
    <script>
        function generateReport() {
            // Redirect to the Daily Uploading Report page or handle it as needed
            window.location.href = 'DailyUploadingReport.php';
        }
    </script>

    <!-- Add your footer and other scripts if needed -->

</body>
</html>
