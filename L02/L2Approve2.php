<!-- Approve2.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve 2 - Loan Scheme 2</title>
    <link rel="stylesheet" href="style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>

    <h1>Approve 2 - Loan Scheme 2</h1>

    <!-- Form for Loan Registration Number -->
    <form id="approveForm">
        <label for="loanRegNumber">Enter Loan Registration Number:</label>
        <input type="text" id="loanRegNumber" name="loanRegNumber" required>
        <button type="button" onclick="searchLoan()">Search</button>
    </form>

    <!-- Display Search Results -->
    <div id="searchResults">
        <!-- Results will be dynamically loaded here -->
    </div>

    <!-- Add your footer and other scripts if needed -->
</body>
</html>
