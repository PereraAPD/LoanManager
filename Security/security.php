<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src=script.js></script>
    
</head>
<body>
    <!-- Header with Main Tab Items -->
    <header>
    <div class="title" id="title">
            Security Dashboard
        </div>
        <div class="navbar" id="navbar">
            <ul>
                <li>
                </li>
                <li><a href="../ApplicationConsole.php"><i class="fas fa-home"></i>Home</a></li>
                <li class="has-submenu">
                    <a href="#">Users</a>
                    <ul class="submenu">
                    <li><a href="#" onclick="loadContent('NewUserCreate.php')">Create New User</a></li>
                <li><a href="#"onclick="loadContent('ModifyUser.php')">Modify User Password & Type</a></li>
                <li><a href="#"onclick="loadContent('UserAccess.php')">Manage User Logging Enable/Disable</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Application</a>
                    <ul class="submenu">
                        <li><a href="#" onclick="loadContent('UserAppAssign.php')">User Application Assign</a></li>
                        <li><a href="#" onclick="loadContent('UserAppPriv.php')">Application User Priviledges</a></li>
                        <li><a href="#" onclick="loadContent('ModUserAppPriv.php')">Set User Application Menu Priviledges</a></li>
                    </ul>
                </li>
                <li><a href="#" onclick="loadContent('UIcustomizer.php')">Setup</a></li>
            </ul>
        </div>
    </header>

    <!-- Content goes here -->
    <div id="content" class="scrollable-content">
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
    <script src="NewUserCreate.js"></script>
</body>
</html>
