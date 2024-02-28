<!-- DeleteAllData.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete All Data - Database Maintenance</title>
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add your stylesheets and other head elements here -->
</head>
<body>

    <h1>Delete All Data - Database Maintenance</h1>

    <!-- Form for deleting data based on loan scheme -->
    <form action="deletealldata_handler.php" method="post">
        <label for="loanScheme">Select Loan Scheme:</label>
        <select name="loanScheme" id="loanScheme">
            <option value="sondurupiyasa">Sondurupiyasa</option>
            <option value="ranaswenna">Ran Aswenna</option>
            <!-- Add more options as needed -->
        </select>
        <button type="submit" name="delete">Delete</button>
    </form>

    <!-- Add your footer and other scripts if needed -->

</body>
</html>
