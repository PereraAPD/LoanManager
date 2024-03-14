<!-- AssignPeriodUI.php -->
<!-- AssignPeriodUI.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Period UI</title>
</head>
<body>
    <div class="container">
    <div class="form-container">
<!-- Your Form -->
<form action="processPeriodAssignment.php" method="post">
    <label for="loanScheme">Loan Scheme:</label>
    <select id="loanscheme" name="loanScheme" required>
    <option value="" disabled selected>Select Loan Scheme</option>
        <option value="jaya">Jaya</option>
        <option value="isura">Isura</option>
        <option value="greenLoan">Green Loan</option>
    </select>

    <label for="bank">Bank:</label>
    <select id="bank" name="bank" required>
    <option value="" disabled selected>Select Bank</option>
        <option value="BOC">Bank of Ceylon</option>
        <option value="NSB">National Savings Bank</option>
        <option value="PB">People's Bank</option>
    </select>

    <label for="loanRegNumber">Loan Registration Number</label>
    <input type="text" id="loanRegNumber" name="loanRegNumber" placeholder="Enter Loan Registration Number" required>

    <label for="fromDate">From Date</label>
    <input type="date" id="fromDate" name="fromDate" required>

    <label for="toDate">To Date</label>
    <input type="date" id="toDate" name="toDate" required>

    <button type="submit">Add</button>
    <button type="button" onclick="printRecords()">Print</button>

</form>
    </div>
    <div class="table-container">
<!-- Your Table -->
<table border="1">
    <thead>
        <tr>
            <th>Loan Scheme</th>
            <th>Bank</th>
            <th>Loan Registration Number</th>
            <th>From Date</th>
            <th>To Date</th>
        </tr>
    </thead>
    <tbody>
        <!-- Fetch and display records from the database using PHP -->
        <!-- You can loop through your database records and generate rows -->
        <tr>
            <td>Jaya</td>
            <td>Bank A</td>
            <td>12345</td>
            <td>2024-02-28</td>
            <td>2024-03-15</td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>
</div>
</div>
<script>
function printRecords() {
    // Fetch the content of the table
    var tableContent = document.getElementById('yourTableId').outerHTML;

    // Create a new window for printing
    var printWindow = window.open('', '_blank');
    
    // Set the content of the new window to be the table content
    printWindow.document.write('<html><head><title>Print Records</title></head><body>');
    printWindow.document.write(tableContent);
    printWindow.document.write('</body></html>');
    
    // Close the document for printing
    printWindow.document.close();
    
    // Trigger the print function
    printWindow.print();
}

// Add an event listener to call the printRecords function when the button is clicked
document.getElementById('printButton').addEventListener('click', printRecords);
</script>

</body>
</html>

