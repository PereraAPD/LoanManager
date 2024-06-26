<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaya Isura Dashboard</title>
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
            Jaya Isura Dashboard
        </div>
        <div class="navbar" id="navbar">
            <ul>
            <li><a href="../ApplicationConsole.php"><i class="fas fa-home"></i>Home</a></li>
                <li class="has-submenu">
                    <a href="#">Approve</a>
                    <ul class="submenu">
<li><a href="#" onclick="loadContent('L6Approve1.php')">Approve 1</a></li>
<li><a href="#" onclick="loadContent('L6Approve2.php')">Approve 2</a></li>
<li><a href="#" onclick="loadContent('L6Approved.php')">Approved</a></li>
                    </ul>
                </li>
                <li><a href="#"onclick="loadContent('L6DUReport.php')">Daily Uploading Report</a></li>
                <li><a href="#"onclick="loadContent('L6RegForm.php')">Registration</a></li>
                <li class="has-submenu">
                    <a href="#">Reference</a>
                    <ul class="submenu">
                        <li><a href="#" onclick="loadContent('L6Ref_SoA.php')">S.O.A.</a></li>
                        <li><a href="#" onclick="loadContent('L6Ref_Sector.php')">Sector</a></li>
                        <li><a href="#" onclick="loadContent('L6Ref_Sec.php')">Security</a></li>
                        <li><a href="#" onclick="loadContent('L6Ref_LoanType.php')">Loan Type</a></li>
                        <li><a href="#" onclick="loadContent('L6Ref_EEA.php')">E.E.A.</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <!-- Content goes here -->
    <div id="content" class="scrollable-content">
    <div class="navigation-box">
        <h2>Instructions</h2>
        <!-- Instructions -->
        <ul>
    <li><strong>Approve:</strong> Approve loan records for different stages, including initial approval, secondary approval, and final approval.</li>
    <li><strong>Daily Uploading Report:</strong> Access daily reports detailing the documents uploaded for loan processing.</li>
    <li><strong>Registration Form:</strong> Fill out and submit the registration form to record loan details for Loan Scheme 2.</li>
    <li><strong>Reference:</strong> Access reference information and manage criteria and security settings for the registration form.</li>
</ul>

<!-- Subtabs under Approve -->
<p>Under the <strong>Approve</strong> tab, you can further explore the following options:</p>
<ul>
    <li><strong>Approve 1:</strong> Initial approval stage for loan records.</li>
    <li><strong>Approve 2:</strong> Secondary approval stage for loan records.</li>
    <li><strong>Approved:</strong> View final approved loan records.</li>
</ul>

<!-- Subtabs under Reference -->
<p>Under the <strong>Reference</strong> tab, you can further explore the following options:</p>
<ul>
    <li><strong>Criteria:</strong> Manage criteria options available in the registration form.</li>
    <li><strong>Security:</strong> Manage security settings for accessing and submitting loan records.</li>
</ul>

        <h2>Loan Schemes</h2>
        <!-- Links To Loan Schemes -->
        <div class="button-container">
            <button onclick="window.location.href='../L01/L01.php'">General
            </button>
            <button onclick="window.location.href='../L04/L04.php'">Riya Shakthi
            </button>
            <button onclick="window.location.href='../L05/L05.php'">Ran Aswenna
            </button>
            <button onclick="window.location.href='../L07/L07.php'">Rivi Bala Savi</button>
            <button onclick="window.location.href='../L08/L08.php'">Diri Saviya
            </button>
        </div>
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
