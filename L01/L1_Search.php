<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Loans - Dashboard</title>
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2><center>Search Loans</center></h2>
            <form id="searchForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="nic">Enter NIC Number:</label>
                <input type="text" id="nic" name="nic" placeholder="Enter NIC Number" required>
                <button type="submit" name="submit">Search</button>
            </form>
        </div>

        <!-- Display search results in a table -->
        <div class="table-container" id="search-results">
            <h2><center>Search Results</center></h2>
            <table>
                <thead>
                    <tr>
                        <th>Loan Scheme</th>
                        <th>Loan Registration No</th>
                        <th>Date of Registration</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                        include 'db_connection.php';  // Ensure you have a file for db connection
                        $nic = $_POST['nic'];
                        $query = "SELECT LCategoryID, LTime, LDate, TotalPaybal FROM customercapitallog WHERE NICNo = ?";
                        if ($stmt = $conn->prepare($query)) {
                            $stmt->bind_param("s", $nic);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['loan_scheme'] . "</td>";
                                    echo "<td>" . $row['loan_registration_no'] . "</td>";
                                    echo "<td>" . $row['date_of_registration'] . "</td>";
                                    echo "<td>" . $row['amount'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4'>No results found for NIC: $nic</td></tr>";
                            }
                            $stmt->close();
                        }
                        $conn->close();
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
