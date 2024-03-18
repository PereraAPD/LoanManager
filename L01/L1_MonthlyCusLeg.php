<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Ledger</title>
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add your stylesheets and other head elements here -->
</head>
<body>

    <h1>Customer Ledger</h1>

    <!-- Form for filtering customer details -->
    <form action="customerledger_handler.php" method="post">
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

        <label for="loanRegNumber">Enter Loan Registration Number:</label>
        <input type="text" name="loanRegNumber" id="loanRegNumber" required>

        <button type="submit" name="search">Search</button>
    </form>

    <!-- Add your footer and other scripts if needed -->

</body>
</html>
