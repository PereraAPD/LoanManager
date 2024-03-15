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
            General Dashboard
        </div>
        <div class="navbar" id="navbar">
            <ul>
                <li><a href="../ApplicationConsole.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="#" onclick="loadContent('AssignPeriodUI.php')">Period Assign</a></li>
                <li class="has-submenu">
                    <a href="#">Common Reference</a>
                <ul class="submenu">
                    <li><a href="#" onclick="loadContent('Bank.php')">Bank</a></li>
                    <li><a href="#" onclick="loadContent('Branch.php')">Branch</a></li>
                    <li><a href="#" onclick="loadContent('District.php')">District</a></li>
                    <li><a href="#" onclick="loadContent('Division.php')">Division</a></li>
                </ul>
                </li>
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

    <!-- Page Content -->
    <div id="content">
    
    <div class="navigation-box">
        <h2>Instructions</h2>
        <!-- Instructions -->
    <ul>
        <li><strong>Period Assign:</strong> Assign periods for loan schemes, allowing users to specify the duration of loan availability.</li>
        <li><strong>Common Reference:</strong> Access a common reference section containing essential information and documents related to loan schemes.</li>
        <li><strong>Search:</strong> Search for specific records, such as loan registrations, using various search criteria.</li>
        <li><strong>Report:</strong> Generate reports and summaries based on loan scheme data for analysis and decision-making.</li>
        <li><strong>Loan Disbursement:</strong> View and manage loan disbursement records.</li>
        <li><strong>Loan Disbursement Semi-Annual:</strong> Access semi-annual disbursement reports for a broader overview of loan distribution.</li>
        <li><strong>Database Maintenance:</strong> Perform maintenance tasks to ensure the database's integrity and performance.</li>
    </ul>
    
    <!-- Subtabs under Report -->
    <!-- <p>Under the <strong>Report</strong> tab, you can further explore the following options:</p>
    <ul>
        <li><strong>Loan Disbursement Monthly:</strong> View monthly disbursement reports detailing the distribution of loans over time.</li>
        <li><strong>Loan Disbursement Semi-Annual:</strong> Access semi-annual disbursement reports for a broader overview of loan distribution.</li>
        <li><strong>Database Maintenance:</strong> Perform maintenance tasks to ensure the database's integrity and performance.</li>
    </ul> -->

        <h2>Loan Schemes</h2>
        <!-- Links To Loan Schemes -->
        <div class="button-container">
            <button onclick="window.location.href='../L02/LoanScheme2.php'">Sonduru Piyasa
            </button>
            <button onclick="window.location.href='../L03/LoanScheme3.php'">Govi Navoda
            </button>
            <button onclick="window.location.href='../L04/LoanScheme4.php'">Riya Shakthi
            </button>
            <button onclick="window.location.href='../L05/LoanScheme5.php'">Ran Aswenna
            </button>
            <button onclick="window.location.href='../L06/LoanScheme6.php'">Jaya Isura
        </button>
            </button>
            <button onclick="window.location.href='../L07/LoanScheme7.php'">Rivi Bala Savi
        </button>
            <button onclick="window.location.href='../L08/LoanScheme8.php'">Diri Saviya
            </button>
            <button onclick="window.location.href='../L09/LoanScheme9.php'">Madya Aruna
        </button>
            <button onclick="window.location.href='../L10/LoanScheme10.php'">Green loan
            </button>
            <button onclick="window.location.href='../L11/LoanScheme11.php'">Home Sweet Home
        </button>
            <button onclick="window.location.href='../L12/LoanScheme12.php'">Sihina Maligaya
            </button>
            <button onclick="window.location.href='../L13/LoanScheme13.php'">Rekawaranaya
        </button>
            <button onclick="window.location.href='../L14/LoanScheme14.php'">Mini Taxi
            </button>
            <button onclick="window.location.href='../L15/LoanScheme15.php'">Sigithi Pasala
        </button>
            <button onclick="window.location.href='../L16/LoanScheme16.php'">Working capitol
            </button>
            <button onclick="window.location.href='../L17/LoanScheme17.php'">City Ride
        </button>
            <button onclick="window.location.href='../L18/LoanScheme18.php'">My Future
        </button>
        </div>
    </div>
    </div>
    <!-- Footer -->
    <footer>
        <div class="footer-left">
            <a href="../user.php">
                <i class="fas fa-user"></i>User
            </a>
            <a href="../logout.php">
                <i class="fas fa-sign-out-alt"></i>Logout
            </a>
        </div>
        <div class="footer-right">
           
            <p>&copy; 2024 Loan Management System. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
