<!-- RegistrationForm.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form - Loan Scheme 2</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="AssignPeriod_style.css">
    <!-- Add other stylesheet links as needed -->
</head>
<body>

    <h1>Registration Form - Loan Scheme 2</h1>

    <!-- Form for Registration -->
    <form id="registrationForm">
        <!-- Details of PFIs -->
        <label for="bankName">Name of the Bank:</label>
        <select id="bankName" name="bankName">
            <!-- Populate dropdown options dynamically based on your data -->
            <option value="bank1">Bank 1</option>
            <option value="bank2">Bank 2</option>
            <!-- Add more options as needed -->
        </select>

        <label for="district">District:</label>
        <select id="district" name="district">
            <!-- Populate dropdown options dynamically based on your data -->
            <option value="district1">District 1</option>
            <option value="district2">District 2</option>
            <!-- Add more options as needed -->
        </select>

        <label for="bankBranch">Name of the Bank Branch:</label>
        <select id="bankBranch" name="bankBranch">
            <!-- Populate dropdown options dynamically based on your data -->
            <option value="branch1">Branch 1</option>
            <option value="branch2">Branch 2</option>
            <!-- Add more options as needed -->
        </select>

        <label for="registrationNumber">Registration Number:</label>
        <input type="text" id="registrationNumber" name="registrationNumber" readonly>

        <label for="contactNumber">Contact Number:</label>
        <input type="text" id="contactNumber" name="contactNumber" readonly>

        <label for="status">Status of Applicant:</label>
        <select id="status" name="status">
            <option value="individual">Individual</option>
            <option value="secondApplicant">Has Second Applicant</option>
        </select>

        <!-- Information of The Applicant -->
        <h2>Information of The Applicant</h2>
        <label for="applicantName">Name of Applicant/Co Applicant:</label>
        <input type="text" id="applicantName" name="applicantName">

        <label for="gender">Gender:</label>
        <!-- Add dropdown for gender -->

        <label for="address">Address:</label>
        <input type="text" id="address" name="address">

        <label for="contactNo">Contact No (tele/mobile):</label>
        <input type="text" id="contactNo" name="contactNo">

        <label for="nicNumber">NIC Number:</label>
        <input type="text" id="nicNumber" name="nicNumber">

        <label for="age">Age:</label>
        <input type="text" id="age" name="age">

        <label for="purpose">Purpose:</label>
        <!-- Add dropdown for purpose -->

        <!-- Location of the house -->
        <h2>Location of the House</h2>
        <label for="houseDistrict">District:</label>
        <!-- Add dropdown for district -->

        <label for="dsDivision">DS Division:</label>
        <!-- Add dropdown for DS Division -->

        <label for="houseSize">Size of the house (sqft):</label>
        <input type="text" id="houseSize" name="houseSize">

        <!-- Selection Criteria -->
        <h2>Selection Criteria</h2>
        <label for="selectionCriteria">Selection Criteria:</label>
        <!-- Add dropdown for selection criteria -->

        <!-- Common Information -->
        <h2>Common Information</h2>
        <!-- Add more form fields based on your requirements -->

        <!-- Terms and Conditions -->
        <h2>Terms and Conditions</h2>
        <label for="interestRate">Rate of Interest of Loan:</label>
        <input type="text" id="interestRate" name="interestRate" readonly>
        <!-- Add logic to autofill and fixed value -->

        <label for="borrowerInterest">Borrower’s Interest Portion:</label>
        <input type="text" id="borrowerInterest" name="borrowerInterest" readonly>
        <!-- Add logic to autofill and fixed value -->

        <label for="interestSubsidy">Interest Subsidy by the GOSL:</label>
        <input type="text" id="interestSubsidy" name="interestSubsidy" readonly>
        <!-- Add logic to autofill and fixed value -->

        <label for="repaymentPeriod">Loan Repayment Period:</label>
        <input type="text" id="repaymentPeriod" name="repaymentPeriod">

        <label for="security">Security:</label>
        <!-- Add dropdown for security -->


        <!-- Save & Clear Buttons -->
        <button type="button" onclick="saveRegistration()">Save</button>
        <button type="button" onclick="clearForm()">Clear</button>
        <!-- Search Field -->
    <label for="searchItem">Search for an existing item:</label>
    <input type="text" id="searchItem" name="searchItem" oninput="searchItem(this.value)">

    <!-- Display Total Loan Count and Amounts Disbursed -->
    <div id="loanInfo">
        <p>Total Loan Count: <span id="totalLoanCount">0</span></p>
        <p>Total Loan Amounts Disbursed: Rs. <span id="totalLoanAmount">0</span></p>
    </div>

    <!-- Send to Approve and Refresh Buttons -->
    <button type="button" onclick="sendToApprove()">Send to Approve</button>
    <button type="button" onclick="refreshPage()">Refresh</button>

    </form>

    
    <!-- Add your footer and other scripts if needed -->
    <script src="L2RegForm.js"></script>
</body>
</html>
