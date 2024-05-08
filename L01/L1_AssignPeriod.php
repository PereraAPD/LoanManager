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
        <?php
        // Include database connection file
        include_once "db_connection.php";

        // SQL query to fetch records from the database
        $sql = "SELECT * FROM your_table";
        $result = mysqli_query($conn, $sql);

        // Check if records exist
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["loan_scheme"] . "</td>";
                echo "<td>" . $row["bank"] . "</td>";
                echo "<td>" . $row["loan_reg_number"] . "</td>";
                echo "<td>" . $row["from_date"] . "</td>";
                echo "<td>" . $row["to_date"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found</td></tr>";
        }

        // Close database connection
        mysqli_close($conn);
        ?>
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
