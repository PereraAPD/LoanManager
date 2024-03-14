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
            My Future Dashboard
        </div>
        <div class="navbar" id="navbar">
            <ul>
                <li><a href="../ApplicationConsole.php">Home</a></li>
                <li><a href="#" onclick="loadContent('AssignPeriodUI.php')">Period Assign</a></li>
                <li><a href="#"onclick="loadContent('Bank.php')">Common Reference</a></li>
                <li><a href="#"onclick="loadContent('SearchUI.php')">Search</a></li>
                <li class="has-submenu">
                    <a href="#">Report</a>
                    <ul class="submenu">
                    <li><a href="#" onclick="loadContent('DailyUploadingReport.php')">Daily Uploading Report</a></li>
<li><a href="#" onclick="loadContent('BankWiseReport.php')">Bank Wise Registered Loan</a></li>
<li><a href="#" onclick="loadContent('ProvinceWiseRegistration.php')">Province Wise Registration</a></li>
<li><a href="#" onclick="loadContent('DistrictWiseRegistration.php')">District Wise Registration</a></li>
<li><a href="#" onclick="loadContent('DsDivisionWiseRegistration.php')">DS Division Wise Registration</a></li>
<li><a href="#" onclick="loadContent('SectorWiseRegistration.php')">Sector Wise Registration</a></li>
<li><a href="#" onclick="loadContent('GenderWiseRegistration.php')">Gender Wise Registration</a></li>
<li><a href="#" onclick="loadContent('FieldVisitReport.php')">Field Visit Report</a></li>
<li><a href="#" onclick="loadContent('AssignPeriodUI.php')">Period Assign</a></li>

                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Loan Disbursement - Monthly</a>
                    <ul class="submenu">
                        <li><a href="#" onclick="loadContent('UploadExcel.php')">Upload Excel</a></li>
                        <li><a href="#" onclick="loadContent('ProcessExcel.php')">Process Excel</a></li>
                        <li><a href="#" onclick="loadContent('CustomerLedger.php')">Customer Ledger</a></li>
                        <li><a href="#" onclick="loadContent('InterestSubsidy.php')">Interest Subsidy</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
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
                </li>
            </ul>
        </div>
    </header>

    <!-- Content goes here -->
    <div id="content">
        <!-- Add your content here -->
        <h1>Welcome to Loan Scheme 1 Dashboard</h1>
        <!-- Add more content as needed -->
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
