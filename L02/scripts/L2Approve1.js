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