<!-- ConditionOfRate.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition of Rate - Database Maintenance</title>
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add your stylesheets and other head elements here -->
</head>
<body>

    <h1>Condition of Rate - Database Maintenance</h1>

    <!-- Form for adding rate of interest details -->
    <form action="conditionofrate_handler.php" method="post">
        <label for="project">Select Project:</label>
        <select name="project" id="project">
            <!-- Add options dynamically based on your projects -->
        </select>

        <label for="rate1">Rate 1:</label>
        <input type="text" name="rate1" id="rate1" readonly value="Your Rate 1">

        <label for="rate2">Rate 2:</label>
        <input type="text" name="rate2" id="rate2" readonly value="Your Rate 2">

        <label for="interestRate">Rate of Interest of Loan %:</label>
        <input type="text" name="interestRate" id="interestRate" required>

        <button type="submit" name="save">Save</button>
    </form>

    <!-- Table to display inserted records -->
    <table>
        <!-- Table headers -->
        <tr>
            <th>Project</th>
            <th>Rate 1</th>
            <th>Rate 2</th>
            <th>Interest Rate</th>
        </tr>
        <!-- Display records dynamically from the database -->
    </table>

    <!-- Add your footer and other scripts if needed -->

</body>
</html>
