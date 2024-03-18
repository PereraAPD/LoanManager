<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Scheme 1 - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <!-- Header with Main Tab Items -->
    <header>
    <div class="title" id="title">
            Govi Navoda Dashboard
        </div>
        <div class="navbar" id="navbar">
            <ul>
                <li><a href="../ApplicationConsole.php">Home</a></li>
                
               
                <li class="has-submenu">
                    <a href="#">Approve</a>
                    <ul class="submenu">
                    <li><a href="#" onclick="loadContent('Approve1.php')">Approve1</a></li>
<li><a href="#" onclick="loadContent('Approve1.php')">Approve2</a></li>
<li><a href="#" onclick="loadContent('Approve1.php')">View Approved</a></li>
                    </ul>
                </li>
<li class="has-submenu">
                    <a href="#">Reference</a>
                    <ul class="submenu">
                    <li><a href="#" onclick="loadContent('ref_statusofapplicant.php')">Status of Applicant</a></li>
<li><a href="#" onclick="loadContent('ref_loantype.php')">Loan Type</a></li>
<li><a href="#" onclick="loadContent('ref_security.php')">Security</a></li>



                    </ul>
                </li>
                <!-- <li><a href="#" onclick="loadContent('reference.php')">Reference</a></li> -->
                <li><a href="#" onclick="loadContent('LoanScheme3.php')">Registration</a></li>
                <li><a href="#" onclick="loadContent('UploadExcel.php')">Daily Uploading Report</a></li>

                <!-- <li class="has-submenu">
                    <a href="#">Loan Disbursement - Monthly</a>
                    <ul class="submenu">
                        <li><a href="#" onclick="loadContent('UploadExcel.php')">Upload Excel</a></li>
                        <li><a href="#" onclick="loadContent('ProcessExcel.php')">Process Excel</a></li>
                        <li><a href="#" onclick="loadContent('CustomerLedger.php')">Customer Ledger</a></li>
                        <li><a href="#" onclick="loadContent('InterestSubsidy.php')">Interest Subsidy</a></li>
                    </ul>
                
                </li> -->
                <!-- <li class="has-submenu">
                    <a href="#">Loan Disbursement - Semi-Annual</a>
                    <ul class="submenu">
                        <li><a href="#" onclick="loadContent('UploadExcelAnnual.php')">Upload Excel</a></li>
                        <li><a href="#" onclick="loadContent('ProcessExcelAnnual.php')">Process Excel</a></li>
                        <li><a href="#" onclick="loadContent('InterestSubsidyAnnual.php')">Interest Subsidy Report</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Database Maintenance</a>
                    <ul class="submenu">
                        <li><a href="#" onclick="loadContent('DeleteAllDataProjectWise.php')">Delete All Data Project Wise</a></li>
                        <li><a href="#" onclick="loadContent('BackupDatabase.php')">Backup Database</a></li>
                        <li><a href="#" onclick="loadContent('ConditionOfRate.php')">Condition of Rate</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </header>

    <!-- Content goes here -->
    <div id="content">
        <!-- Add your content here -->
        <h1>Welcome to Loan Scheme 1 Dashboard</h1>
        <!-- Add more content as needed -->
        <!-- Add this section within the <div id="content"> ... </div> -->
<h2>Registration Form - Govi Navodaya</h2>
<form id="registrationForm">
    <h3>Details of PFI</h3>
    <label for="bankName">Name of the Bank:</label>
    <select id="bankName" name="bankName">
        <!-- Populate with options -->
    </select><br>
    <label for="bankDistrict">District of the Bank Branch:</label>
    <select id="bankDistrict" name="bankDistrict">
        <!-- Populate with options -->
    </select><br>
    <label for="bankBranchName">Name of the Bank Branch:</label>
    <input type="text" id="bankBranchName" name="bankBranchName"><br>
    <label for="loanRegNumber">Loan Registration Number:</label>
    <input type="text" id="loanRegNumber" name="loanRegNumber"><br>
    <label for="bankPhone">Telephone Number (Bank):</label>
    <input type="tel" id="bankPhone" name="bankPhone"><br>
    <label for="bankFax">Fax (Bank):</label>
    <input type="tel" id="bankFax" name="bankFax"><br>
    <label for="branchPhone">Telephone Number (Branch):</label>
    <input type="tel" id="branchPhone" name="branchPhone"><br>
    <label for="branchFax">Fax (Branch):</label>
    <input type="tel" id="branchFax" name="branchFax"><br>

    <h3>Details of Borrower</h3>
    <label for="applicantStatus">Status of Applicant:</label>
    <select id="applicantStatus" name="applicantStatus">
        <!-- Populate with options -->
    </select><br>
    <label for="personName">Name of the Person:</label>
    <input type="text" id="personName" name="personName"><br>
    <label for="applicantName">Name of the Applicant:</label>
    <input type="text" id="applicantName" name="applicantName"><br>
    <label for="applicantGender">Gender of Applicant:</label>
    <select id="applicantGender" name="applicantGender">
        <!-- Populate with options -->
    </select><br>
    <label for="applicantAddress">Address:</label>
    <textarea id="applicantAddress" name="applicantAddress"></textarea><br>
    <label for="applicantContact">Contact Number:</label>
    <input type="tel" id="applicantContact" name="applicantContact"><br>
    <label for="applicantNIC">NIC Number:</label>
    <input type="text" id="applicantNIC" name="applicantNIC"><br>
    <label for="applicantAge">Age:</label>
    <input type="number" id="applicantAge" name="applicantAge"><br>

    <button type="button" onclick="addApplicant()">Add Applicant</button><br>

    <h3>Details of Loan</h3>
    <h4>Project Cost</h4>
    <label for="projectCost">Estimated Cost of the Proposed Project Rs.:</label>
    <input type="number" id="projectCost" name="projectCost"><br>
    <label for="borrowerEquity">Borrower's Equity Contribution Rs.:</label>
    <input type="number" id="borrowerEquity" name="borrowerEquity"><br>
    <label for="loanAmount">Required Loan Amount:</label>
    <input type="number" id="loanAmount" name="loanAmount"><br>

    <label for="projectDistrict">District of the Project Located:</label>
    <select id="projectDistrict" name="projectDistrict">
        <!-- Populate with options -->
    </select><br>
    <label for="projectDsDivision">DS Division:</label>
    <select id="projectDsDivision" name="projectDsDivision">
        <!-- Populate with options -->
    </select><br>
    <label for="projectPurpose">Purpose of the Project:</label>
    <select id="projectPurpose" name="projectPurpose">
        <!-- Populate with options -->
    </select><br>
    <label for="loanType">Type of Loan:</label>
    <select id="loanType" name="loanType">
        <!-- Populate with options -->
    </select><br>

    <h3>Terms and Conditions</h3>
    <label for="interestRate">Effective Rate of Interest of Loan(%):</label>
    <input type="number" id="interestRate" name="interestRate"><br>
    <label for="borrowerInterestRate">Interest Rate of the Borrower(%):</label>
    <input type="number" id="borrowerInterestRate" name="borrowerInterestRate"><br>
    <label for="interestSubsidy">Interest Subsidy by GOSL(%):</label>
    <input type="number" id="interestSubsidy" name="interestSubsidy"><br>
    <label for="repaymentPeriod">Loan Repayment Period:</label>
    <input type="number" id="repaymentPeriod" name="repaymentPeriod"><br>
    <label for="gracePeriod">Grace Period:</label>
    <input type="number" id="gracePeriod" name="gracePeriod"><br>
    <label for="repaymentMethod">Repayment Method:</label>
    <select id="repaymentMethod" name="repaymentMethod">
        <!-- Populate with options -->
    </select><br>
    <label for="security">Security:</label>
    <select id="security" name="security">
        <!-- Populate with options -->
    </select><br>

    <button type="submit">Save</button>
    <button type="button" onclick="clearForm()">Clear</button>
</form>

<div id="applicantGrid">
    <!-- Grid to display and modify applicant details -->
</div>

    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-left">
            <a href="../user.php">
                <i class="fas fa-user"></i><!-- user icon --> User
            </a>
            <a href="../logout.php">
                <i class="fas fa-sign-out-alt"></i><!-- logout icon --> Logout
            </a>
        </div>
        <div class="footer-right">
            <!-- Rest of the footer content -->
            <p>&copy; 2024 Loan Management System. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
