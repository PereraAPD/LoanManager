<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ran Aswanna Registration Form</title>
    <form method="post" action="L5RegForm.php">
    <!-- Include CSS files -->
    <!-- <link rel="stylesheet" href="AddNewStyle.css"> -->
    <!-- Include any additional CSS files if needed -->
    <style>
        /* Add any additional CSS specific to this page */
    </style>
</head>
<body>
    <div class="container">
        <!-- Details of PFI -->
        <h2>Details of PFI</h2>
        <div class="form-group">
            <label for="bankName">Name of the Bank:</label>
            <select name="bankName" id="bankName">
                <!-- Options for bank names -->
            </select>
            <!-- Bank code field -->
            <input type="text" name="bankCode" id="bankCode" readonly>
        </div>
        <div class="form-group">
            <label for="bankDistrict">District of the Bank Branch:</label>
            <select name="bankDistrict" id="bankDistrict">
                <!-- Options for bank districts -->
            </select>
        </div>
        <div class="form-group">
            <label for="branchName">Name of the Bank Branch:</label>
            <select name="branchName" id="branchName">
                <!-- Options for bank branch names -->
            </select>
            <!-- Branch code field -->
            <input type="text" name="branchCode" id="branchCode" readonly>
        </div>
        <div class="form-group">
            <label for="bankContact">Bank Contact No:</label>
            <input type="text" name="bankContact" id="bankContact">
        </div>
        <div class="form-group">
            <label for="bankFax">Bank Fax:</label>
            <input type="text" name="bankFax" id="bankFax">
        </div>
        <div class="form-group">
            <label for="branchContact">Branch Contact No:</label>
            <input type="text" name="branchContact" id="branchContact">
        </div>
        <div class="form-group">
            <label for="branchFax">Branch Fax:</label>
            <input type="text" name="branchFax" id="branchFax">
        </div>
        <div class="form-group">
            <label for="loanRegistrationNo">Loan Registration No:</label>
            <input type="text" name="loanRegistrationNo" id="loanRegistrationNo">
        </div>

        <!-- Details of the Applicant/Partner/Director -->
        <h2>Details of the Applicant/Partner/Director</h2>
        <div class="form-group">
            <label for="applicantName">Name of Applicant:</label>
            <select name="applicantName" id="applicantName">
                <!-- Options for applicant names -->
            </select>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address">
        </div>
        <div class="form-group">
            <label for="contactNo">Contact No:</label>
            <input type="text" name="contactNo" id="contactNo">
        </div>
        <div class="form-group">
            <label for="nic">NIC:</label>
            <input type="text" name="nic" id="nic">
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="text" name="age" id="age">
        </div>
        <button type="button" onclick="addApplicant()">Add Applicant</button>

        <!-- Grid for added applicants -->
        <div class="grid-container">
            <h2>Added Applicants</h2>
            <table id="applicantGrid">
                <thead>
                    <tr>
                        <th>Delete</th>
                        <th>Edit</th>
                        <th>Applicant Name</th>
                        <th>Address</th>
                        <th>Contact No</th>
                        <th>NIC Number</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Grid rows will be dynamically populated -->
                </tbody>
            </table>
        </div>

        <!-- Details of the Loan -->
        <h2>Details of the Loan</h2>
        <div class="form-group">
            <h3>Project Cost</h3>
            <div class="form-group">
                <label for="estimatedCost">Estimated cost of the Proposed Project Rs.:</label>
                <input type="text" name="estimatedCost" id="estimatedCost">
            </div>
            <div class="form-group">
                <label for="equityContribution">Borrower's Equity Contribution Rs.:</label>
                <input type="text" name="equityContribution" id="equityContribution">
            </div>
            <div class="form-group">
                <label for="loanAmount">Required Loan amount Rs.:</label>
                <input type="text" name="loanAmount" id="loanAmount">
            </div>
            <div class="form-group">
                <label for="loanApprovedByPFI">Loan recommended or approved By PFI Rs.:</label>
                <input type="text" name="loanApprovedByPFI" id="loanApprovedByPFI">
            </div>
        </div>
        <div class="form-group">
            <label for="transportDistrict">District of Transport service located:</label>
            <select name="transportDistrict" id="transportDistrict">
                <!-- Options for transport districts -->
            </select>
        </div>
        <div class="form-group">
            <label for="dsDivision">DS division:</label>
            <select name="dsDivision" id="dsDivision">
                <!-- Options for DS divisions -->
            </select>
        </div>
        <div class="form-group">
            <label for="projectSector">Sector of the Project:</label>
            <select name="projectSector" id="projectSector">
                <!-- Options for project sectors -->
            </select>
        </div>
        <div class="form-group">
            <label for="economicActivity">Eligible Economic Activity:</label>
            <div class="checkbox-list">
                <label><input type="checkbox" name="economicActivity[]" value="precisionAgriculture">Use of precision agriculture</label><br>
                <label><input type="checkbox" name="economicActivity[]" value="hiTechIrrigation">Use of hi-tech irrigation methods</label><br>
                <label><input type="checkbox" name="economicActivity[]" value="machineryEquipment">Purpose of machinery and equipment</label><br>
                <label><input type="checkbox" name="economicActivity[]" value="poultryHatcheries">Poultry hatcheries</label><br>
                <label><input type="checkbox" name="economicActivity[]" value="floricultureNurseries">Floriculture nurseries</label><br>
                <label><input type="checkbox" name="economicActivity[]" value="ornamentalFish">Ornamental fish industry related development activities</label><br>
                <label><input type="checkbox" name="economicActivity[]" value="siloStorages">Investment in silo storages</label><br>
                <label><input type="checkbox" name="economicActivity[]" value="riceMills">Construction of rice mills</label><br>
                <label><input type="checkbox" name="economicActivity[]" value="extensionServices">Extension services for agriculture</label><br>
                <label><input type="checkbox" name="economicActivity[]" value="processingPlant">Establishment of processing plant</label><br>
                <label><input type="checkbox" name="economicActivity[]" value="coldRoom">Establishment of cold room</label><br>
            </div>
        </div>

        <!-- Terms and Condition -->
        <h2>Terms and Condition</h2>
        <div class="form-group">
            <label for="effectiveInterestRate">Effective Rate of Interest of Loan(%):</label>
            <input type="text" name="effectiveInterestRate" id="effectiveInterestRate" readonly>
        </div>
        <div class="form-group">
            <label for="borrowerInterestRate">Interest rate to the Borrower(%):</label>
            <input type="text" name="borrowerInterestRate" id="borrowerInterestRate" readonly>
        </div>
        <div class="form-group">
            <label for="interestSubsidy">Interest Subsidy by the GOSL(%):</label>
            <input type="text" name="interestSubsidy" id="interestSubsidy" readonly>
        </div>
        <div class="form-group">
            <label for="repaymentPeriod">Loan Repayment period(Including grace) and Month:</label>
            <input type="text" name="repaymentPeriod" id="repaymentPeriod">
        </div>
        <div class="form-group">
            <label for="repaymentMethod">Repayment method:</label>
            <select name="repaymentMethod" id="repaymentMethod">
                <!-- Options for repayment methods -->
            </select>
        </div>
        <div class="form-group">
            <label for="gracePeriod">Grace period and Month:</label>
            <input type="text" name="gracePeriod" id="gracePeriod">
        </div>
        <div class="form-group">
            <label for="security">Security:</label>
            <select name="security" id="security">
                <!-- Options for security -->
            </select>
        </div>

        <!-- Buttons for the entire form -->
        <div class="buttons">
            <button type="button" onclick="saveForm()">Save</button>
            <button type="button" onclick="clearForm()">Clear</button>
        </div>
    </div>

    <!-- Include JavaScript files -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include any additional JavaScript files if needed -->
    <script src="script.js"></script>
</body>
</html>
