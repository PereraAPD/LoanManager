<!-- GenderWiseRegistration.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender Wise Registration - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>

    <!-- Content area -->
        <h1>Gender Wise Registration</h1>

        <!-- Gender Wise Registration Form -->
        <form id="genderWiseRegistrationForm">
            <label for="fromDate">From Date:</label>
            <input type="date" id="fromDate" name="fromDate" required>

            <label for="toDate">To Date:</label>
            <input type="date" id="toDate" name="toDate" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <!-- Populate with gender options dynamically -->
                <option value="male">Male</option>
                <option value="female">Female</option>
                <!-- Add more options as needed -->
            </select>

            <button type="button" onclick="printGenderWiseRegistration()">Print Registration</button>
        </form>

        <!-- Display area for the gender-wise registration -->
        <div id="registrationDisplay">
            <!-- This is where the gender-wise registration will be displayed -->
        </div>

    <!-- Include your JavaScript file (if needed) -->
    <script src="script.js"></script>
</body>
</html>
