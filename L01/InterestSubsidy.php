<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interest Subsidy</title>
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add your stylesheets and other head elements here -->
</head>
<body>

    <h1>Interest Subsidy</h1>

    <!-- Form for filtering records -->
    <form action="interestsubsidy_handler.php" method="post">
        <label for="year">Select Year:</label>
        <select name="year" id="year">
            <!-- Populate with your years -->
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <!-- Add more options as needed -->
        </select>

        <label for="month">Select Month:</label>
        <select name="month" id="month">
            <!-- Populate with your months -->
            <option value="01">January</option>
            <option value="02">February</option>
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
            <option value="bank1">Bank 1</option>
            <option value="bank2">Bank 2</option>
            <!-- Add more options as needed -->
        </select>

        <button type="submit" name="delete">Delete</button>
        <button type="submit" name="print">Print</button>
    </form>

    <!-- Add your footer and other scripts if needed -->

</body>
</html>
