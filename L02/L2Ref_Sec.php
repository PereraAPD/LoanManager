<!-- Security.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security - Loan Scheme 2</title>
    <link rel="stylesheet" href="style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>

    <h1>Security - Loan Scheme 2</h1>

    <!-- Form for Adding/New Security Records -->
    <form id="securityForm">
        <label for="securityName">Security Name:</label>
        <input type="text" id="securityName" name="securityName" required>

        <label for="securityType">Security Type:</label>
        <input type="text" id="securityType" name="securityType" required>

        <button type="button" onclick="addNewSecurity()">Add/New</button>
    </form>

    <!-- Table to Display Security Records -->
    <table id="securityTable">
        <thead>
            <tr>
                <th>Security Name</th>
                <th>Security Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Populate table rows dynamically based on your data -->
            <tr>
                <td>Security 1</td>
                <td>Type 1</td>
                <td>
                    <button type="button" onclick="deleteSecurity(1)">Delete</button>
                    <button type="button" onclick="modifySecurity(1)">Modify</button>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>

    <!-- Add your footer and other scripts if needed -->
</body>
</html>
