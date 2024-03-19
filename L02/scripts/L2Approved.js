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