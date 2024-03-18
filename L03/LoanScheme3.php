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
                    <li><a href="#" onclick="loadContent('L3Approve1.php')">Approve1</a></li>
                    <li><a href="#" onclick="loadContent('L3Approve2.php')">Approve2</a></li>
                    <li><a href="#" onclick="loadContent('L3Approved.php')">View Approved</a></li>
                    </ul>
                </li>
                <li><a href="#" onclick="loadContent('L3Reference.php')">Reference</a></li>
                <li><a href="#" onclick="loadContent('L3RegForm.php')">Registration</a></li>
                <li><a href="#" onclick="loadContent('L3DUReport.php')">Daily Uploading Report</a></li>
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
