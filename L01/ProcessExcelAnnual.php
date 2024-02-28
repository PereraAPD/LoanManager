<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Excel - Annual</title>
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add your stylesheets and other head elements here -->
</head>
<body>

    <h1>Process Excel - Annual</h1>

    <!-- Form for processing Excel -->
    <form action="processexcelannual_handler.php" method="post">
        <label for="loanScheme">Select Loan Scheme:</label>
        <select name="loanScheme" id="loanScheme">
            <!-- Populate with your loan schemes -->
            <option value="jayaIsura">Jaya Isura</option>
            <option value="greenLoan">Green Loan</option>
            <!-- Add more options as needed -->
        </select>

        <label for="files">Choose Files to Process:</label>
        <input type="file" name="files[]" id="files" multiple>

        <button type="submit" name="process">Process</button>
    </form>

    <!-- Add your footer and other scripts if needed -->

</body>
</html>
