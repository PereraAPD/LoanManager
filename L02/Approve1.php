<!-- Approve1.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve 1 - Loan Scheme 2</title>
    <link rel="stylesheet" href="style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>

    <h1>Approve 1 - Loan Scheme 2</h1>

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

    <script>
        function searchLoan() {
            // Perform AJAX request or any other method to search for loans based on loanRegNumber
            // Results will be dynamically loaded into the searchResults div
            // Example: Displaying dummy results for illustration
            const resultsContainer = document.getElementById('searchResults');
            resultsContainer.innerHTML = `
                <p>Search Results:</p>
                <ul>
                    <li><input type="checkbox" name="loanResult" value="loan1"> Loan 1 Details</li>
                    <li><input type="checkbox" name="loanResult" value="loan2"> Loan 2 Details</li>
                    <!-- Add more results dynamically -->
                </ul>
                <button type="button" onclick="approveSelected()">Approve Selected</button>
                <button type="button" onclick="rejectSelected()">Reject Selected</button>
            `;
        }

        function approveSelected() {
            // Handle the approval logic here
            alert('Selected loans approved!');
        }

        function rejectSelected() {
            // Handle the rejection logic here
            alert('Selected loans rejected!');
        }
    </script>

</body>
</html>
