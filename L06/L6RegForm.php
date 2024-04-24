<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="process_form.php" method="post">
        <h3>Details of PFI</h3>
        <label for="bank_name">Name of the Bank:</label>
        <select name="bank_name" id="bank_name">
            <option value="bank1">Bank 1</option>
            <option value="bank2">Bank 2</option>
            <!-- Add more banks here -->
        </select><br>
        <label for="bank_district">District of the Bank Branch:</label>
        <select name="bank_district" id="bank_district">
            <option value="district1">District 1</option>
            <option value="district2">District 2</option>
            <!-- Add more districts here -->
        </select><br>
        <label for="bank_branch">Name of the Bank Branch:</label>
        <input type="text" id="bank_branch" name="bank_branch"><br>
        <label for="loan_registered_no">Loan registered No.:</label>
        <input type="text" id="loan_registered_no" name="loan_registered_no"><br>
        <label for="bank_contact">Bank Contact No and Fax:</label>
        <input type="text" id="bank_contact" name="bank_contact"><br>
        <label for="branch_contact">Branch Contact No and Fax:</label>
        <input type="text" id="branch_contact" name="branch_contact"><br>

        <h3>Details of SME</h3>
        <label for="business_name">Name of the Business:</label>
        <input type="text" id="business_name" name="business_name"><br>
        <label for="business_address">Address:</label>
        <input type="text" id="business_address" name="business_address"><br>
        <label for="project_district">District of the Project location:</label>
        <select name="project_district" id="project_district">
            <option value="district1">District 1</option>
            <option value="district2">District 2</option>
            <!-- Add more districts here -->
        </select><br>
        <label for="sector">Sector:</label>
        <select name="sector" id="sector">
            <option value="sector1">Sector 1</option>
            <option value="sector2">Sector 2</option>
            <!-- Add more sectors here -->
        </select><br>
        <label for="applicant_status">Status of Applicant:</label>
        <select name="applicant_status" id="applicant_status">
            <option value="status1">Status 1</option>
            <option value="status2">Status 2</option>
            <!-- Add more applicant statuses here -->
        </select><br>
        
        <h3>Records of Details of SME</h3>
        <table>
            <thead>
                <tr>
                    <th>Name of A./P./D.</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Contact No.</th>
                    <th>NIC no.</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add rows dynamically with JavaScript or PHP -->
            </tbody>
        </table>

        <h3>Details of the Loan</h3>
        <label for="loan_type">Type of Loan:</label>
        <select name="loan_type" id="loan_type">
            <option value="type1">Type 1</option>
            <option value="type2">Type 2</option>
            <!-- Add more loan types here -->
        </select><br>
        <label for="business_registration_no">Business Registration No.:</label>
        <input type="text" id="business_registration_no" name="business_registration_no"><br>
        <label for="registration_date">Date of Business Registration:</label>
        <input type="date" id="registration_date" name="registration_date"><br>
        <label for="annual_turnover">Annual Turnover:</label>
        <input type="text" id="annual_turnover" name="annual_turnover"><br>
        <label for="employment_cadre_existing">Existing Employment Cadre:</label>
        <input type="text" id="employment_cadre_existing" name="employment_cadre_existing"><br>
        <label for="employment_cadre_new">Newly Generated Employment Cadre:</label>
        <input type="text" id="employment_cadre_new" name="employment_cadre_new"><br>
        <label for="target_group">Target Group Category:</label>
        <select name="target_group" id="target_group">
            <option value="group1">Group 1</option>
            <option value="group2">Group 2</option>
            <!-- Add more target groups here -->
        </select><br>
        <label for="export_oriented">Export Oriented SME:</label>
        <select name="export_oriented" id="export_oriented">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br>

        <h3>Eligible Economic Activity</h3>
        <input type="checkbox" id="activity1" name="activities[]" value="Advance Technology">
        <label for="activity1">Advance Technology</label><br>
        <input type="checkbox" id="activity2" name="activities[]" value="New Constructions or Further Constructions">
        <label for="activity2">New Constructions or Further Constructions</label><br>
        <input type="checkbox" id="activity3" name="activities[]" value="Purchase of Machinery/Equipment/Furniture">
        <label for="activity3">Purchase of Machinery/Equipment/Furniture</label><br>
        <input type="checkbox" id="activity4" name="activities[]" value="Working Capital">
        <label for="activity4">Working Capital</label><br>

        <label for="approvals_certifications">Other relevant approvals/certification obtained:</label>
        <select name="approvals_certifications" id="approvals_certifications">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br>
        <label for="project_cost">Estimated cost of proposed project Rs.:</label>
        <input type="text" id="project_cost" name="project_cost"><br>
        <label for="borrower_equity">Borrower's Equity contribution Rs.:</label>
        <input type="text" id="borrower_equity" name="borrower_equity"><br>

        <h4>Requested loan amount by the Client Rs.</h4>
        <label for="investment_requested">Investment:</label>
        <input type="text" id="investment_requested" name="investment_requested"><br>
        <label for="working_capital_requested">Working Capital:</label>
        <input type="text" id="working_capital_requested" name="working_capital_requested"><br>
        <label for="total_requested">Total:</label>
        <input type="text" id="total_requested" name="total_requested"><br>

        <h4>Loan amount recommended by the PFI Rs.</h4>
        <label for="investment_recommended">Investment:</label>
        <input type="text" id="investment_recommended" name="investment_recommended"><br>
        <label for="working_capital_recommended">Working Capital:</label>
        <input type="text" id="working_capital_recommended" name="working_capital_recommended"><br>
        <label for="total_recommended">Total:</label>
        <input type="text" id="total_recommended" name="total_recommended"><br>

        <h3>Terms and Conditions</h3>
        <label for="interest_rate">Effective Rate of Interest of Loan(%):</label>
        <input type="text" id="interest_rate" name="interest_rate"><br>
        <label for="borrower_interest_rate">Interest rate to the Borrower(%):</label>
        <input type="text" id="borrower_interest_rate" name="borrower_interest_rate"><br>
        <label for="interest_subsidy">Interest Subsidy borne by the GOSL(%):</label>
        <input type="text" id="interest_subsidy" name="interest_subsidy"><br>
        <label for="repayment_period">Loan Repayment period (Including grace) (in month):</label>
        <input type="text" id="repayment_period" name="repayment_period"><br>
        <label for="grace_period">Grace period (In Month):</label>
        <input type="text" id="grace_period" name="grace_period"><br>
        <label for="project_type">Type of the project:</label>
        <select name="project_type" id="project_type">
            <option value="type1">Type 1</option>
            <option value="type2">Type 2</option>
            <!-- Add more project types here -->
        </select><br>

        <h4>Security</h4>
        <input type="checkbox" id="security1" name="security[]" value="Movable assets">
        <label for="security1">Movable assets</label><br>
        <input type="checkbox" id="security2" name="security[]" value="Immovable assets">
        <label for="security2">Immovable assets</label><br>
        <input type="checkbox" id="security3" name="security[]" value="Guarantors">
        <label for="security3">Guarantors</label><br>
        <input type="checkbox" id="security4" name="security[]" value="Other">
        <label for="security4">Other</label><br>

        <button type="submit" name="save">Save</button>
        <button type="reset">Clear</button>
    </form>
</body>
</html>
  