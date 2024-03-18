<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interest Subsidy Report - Annual</title>
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add your stylesheets and other head elements here -->
</head>
<body>

    <h1>Interest Subsidy Report - Annual</h1>

    <!-- Form for filtering records -->
    <form action="interestsubsidyannual_handler.php" method="post">
        <label for="year">Select Year:</label>
        <select name="year" id="year">
            <!-- Populate with years as needed -->
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <!-- Add more options as needed -->
        </select>

        <label for="month">Select Month:</label>
        <select name="month" id="month">
            <!-- Populate with months as needed -->
            <option value="1">January</option>
            <option value="2">February</option>
            <!-- Add more options as needed -->
        </select>

        <label for="loanScheme">Select Loan Scheme:</label>
        <select name="loanScheme" id="loanScheme">
            <!-- Populate with your loan schemes -->
            <option value="jayaIsura">Jaya Isura</option>
            <option value="greenLoan">Green Loan</option>
            <!-- Add more options as needed -->
        </select>

        <label for="bank">Select Bank:</label>
        <select name="bank" id="bank">
            <!-- Populate with your banks -->
            <option value="bankA">Bank A</option>
            <option value="bankB">Bank B</option>
            <!-- Add more options as needed -->
        </select>

        <button type="submit" name="delete">Delete</button>
        <button type="submit" name="print">Print</button>
    </form>

    <!-- Add your footer and other scripts if needed -->

</body>
</html>
