<!-- Criteria.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criteria - Loan Scheme 2</title>
    <link rel="stylesheet" href="style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>

    <h1>Criteria - Loan Scheme 2</h1>

    <!-- Form for Adding/New Criteria -->
    <form id="criteriaForm">
        <label for="criteriaName">Criteria Name:</label>
        <input type="text" id="criteriaName" name="criteriaName" required>

        <label for="criteriaValue">Criteria Value:</label>
        <input type="text" id="criteriaValue" name="criteriaValue" required>

        <button type="button" onclick="addNewCriteria()">Add/New</button>
    </form>

    <!-- Table to Display Criteria Records -->
    <table id="criteriaTable">
        <thead>
            <tr>
                <th>Criteria Name</th>
                <th>Criteria Value</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Populate table rows dynamically based on your data -->
            <tr>
                <td>Criteria 1</td>
                <td>Value 1</td>
                <td>
                    <button type="button" onclick="deleteCriteria(1)">Delete</button>
                    <button type="button" onclick="modifyCriteria(1)">Modify</button>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>

    <!-- Add your footer and other scripts if needed -->
</body>
</html>
