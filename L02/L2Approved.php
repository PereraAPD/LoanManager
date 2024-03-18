<!-- ViewApproved.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Approved - Loan Scheme 2</title>
    <link rel="stylesheet" href="style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>

    <h1>View Approved - Loan Scheme 2</h1>

    <!-- Search Box for Approved Loans -->
    <label for="searchLoan">Search Approved Loans:</label>
    <input type="text" id="searchLoan" name="searchLoan" placeholder="Enter Loan Registration Number">
    <button type="button" onclick="searchApprovedLoans()">Search</button>

    <!-- Display Search Results in Table -->
    <div id="searchResults">
        <!-- Results will be dynamically loaded here -->
    </div>

    <!-- Add your footer and other scripts if needed -->

    <script>
        function searchApprovedLoans() {
            const searchInput = document.getElementById('searchLoan').value;

            // Perform AJAX request or any other method to search for approved loans
            // Results will be dynamically loaded into the searchResults div
            // Example: Displaying dummy results for illustration
            const resultsContainer = document.getElementById('searchResults');
            resultsContainer.innerHTML = `
                <p>Search Results for Approved Loans:</p>
                <table>
                    <thead>
                        <tr>
                            <th>Loan Registration Number</th>
                            <th>Customer Name</th>
                            <th>Loan Amount</th>
                            <!-- Add more table headers as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ABC123</td>
                            <td>John Doe</td>
                            <td>$10,000</td>
                            <!-- Add more table data dynamically -->
                        </tr>
                        <!-- Add more rows dynamically -->
                    </tbody>
                </table>
            `;
        }
    </script>

</body>
</html>
