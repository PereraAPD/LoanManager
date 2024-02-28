<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Scheme 2 - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <!-- Header with Main Tab Items -->
    <header>
        <div class="navbar" id="navbar">
            <ul>
                <li><a href="../ApplicationConsole.php">Home</a></li>
                <li><a href="#" onclick="loadContent('Approve1.php')">Approve 1</a></li>
                <li><a href="#"onclick="loadContent('Approve2.php')">Approve 2</a></li>
                <li><a href="#"onclick="loadContent('ViewApproved.php')">View Approved</a></li>
                <li><a href="#" onclick="loadContent('DailyUploadingReport.php')">Daily Uploading Report</a></li>
                <li><a href="#" onclick="loadContent('L2RegForm.php')">Registration Form</a></li>
                <li class="has-submenu">
                    <a href="#">Reference</a>
                    <ul class="submenu">
                        <li><a href="#" onclick="loadContent('Criteria.php')">Criteria</a></li>
                        <li><a href="#" onclick="loadContent('Security.php')">Security</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <!-- Content goes here -->
    <div id="content">
        <!-- Add your content here -->
        <h1>Welcome to Loan Scheme 2 Dashboard</h1>
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
