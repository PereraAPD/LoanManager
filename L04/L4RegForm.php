<!DOCTYPE html>
<html>
<head>
    <title>Riya ShakThi Registration Form</title>
</head>
<body>
    <h2>Riya ShakThi Registration Form</h2>
    <form method="post" action="L4RegForm.php">
        <h3>Details Of PFI</h3>
        <label for="bank">Name of the Bank:</label>
        <select name="bank" id="bank">
            <option value="bank1">Bank 1</option>
            <option value="bank2">Bank 2</option>
            <!-- Add more banks here -->
        </select><br>
        <label for="bank_code">Bank Code:</label>
        <input type="text" name="bank_code" id="bank_code" readonly><br>
        <label for="district">District of the Bank Branch:</label>
        <select name="district" id="district">
            <option value="district1">District 1</option>
            <option value="district2">District 2</option>
            <!-- Add more districts here -->
        </select><br>
        <label for="bank_branch">Name of the Bank Branch:</label>
        <select name="bank_branch" id="bank_branch">
            <option value="branch1">Branch 1</option>
            <option value="branch2">Branch 2</option>
            <!-- Add more branches here -->
        </select><br>
        <label for="branch_code">Branch Code:</label>
        <input type="text" name="branch_code" id="branch_code" readonly><br>
        <label for="bank_contact_no">Bank Contact No:</label>
        <input type="text" name="bank_contact_no" id="bank_contact_no"><br>
        <label for="bank_fax">Bank Fax:</label>
        <input type="text" name="bank_fax" id="bank_fax"><br>
        <label for="branch_contact_no">Branch Contact No:</label>
        <input type="text" name="branch_contact_no" id="branch_contact_no"><br>
        <label for="branch_fax">Branch Fax:</label>
        <input type="text" name="branch_fax" id="branch_fax"><br>
        <label for="loan_registration_no">Loan Registration No:</label>
        <input type="text" name="loan_registration_no" id="loan_registration_no"><br>

        <h3>Details of the Borrower</h3>
        <label for="target_group_category">Target Group Category:</label>
        <select name="target_group_category" id="target_group_category">
            <option value="category1">Category 1</option>
            <option value="category2">Category 2</option>
            <!-- Add more categories here -->
        </select><br>
        <label for="membership_no">Membership No:</label>
        <input type="text" name="membership_no" id="membership_no"><br>
        <label for="membership_date">Membership Date:</label>
        <input type="date" name="membership_date" id="membership_date"><br>

        <h3>Detail Of Applicant</h3>
        <label for="applicant_name">Name of the Applicant:</label>
        <input type="text" name="applicant_name" id="applicant_name"><br>
        <label for="gender">Gender:</label>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address"><br>
        <label for="contact_no">Contact No:</label>
        <input type="text" name="contact_no" id="contact_no"><br>
        <label for="nic_number">NIC Number:</label>
        <input type="text" name="nic_number" id="nic_number"><br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age"><br>

        <!-- Grid for added applicants -->
        <h3>Added Applicants</h3>
        <table>
            <thead>
                <tr>
                    <th>Delete</th>
                    <th>Edit</th>
                    <th>Applicant Name</th>
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>NIC number</th>
                </tr>
            </thead>
            <tbody id="added_applicants">
                <!-- Rows will be dynamically added here -->
            </tbody>
        </table>
        <button type="button" onclick="addApplicant()">Add Applicant</button><br>

        <h3>Details Of the Loan</h3>
        <h4>Project Cost</h4>
        <label for="project_cost">Estimated cost of the Proposed Project Rs.:</label>
        <input type="text" name="project_cost" id="project_cost"><br>
        <label for="borrower_equity_contribution">Borrower's Equity Contribution Rs.:</label>
        <input type="text" name="borrower_equity_contribution" id="borrower_equity_contribution"><br>
        <label for="required_loan_amount">Required Loan amount Rs.:</label>
        <input type="text" name="required_loan_amount" id="required_loan_amount"><br>
        <label for="loan_approved_by_pfi">Loan recommended or approved By PFI Rs.:</label>
        <input type="text" name="loan_approved_by_pfi" id="loan_approved_by_pfi"><br>

        <label for="transport_district">District of Transport service located:</label>
        <select name="transport_district" id="transport_district">
            <option value="district1">District 1</option>
            <option value="district2">District 2</option>
            <!-- Add more districts here -->
        </select><br>
        <label for="ds_division">DS division:</label>
        <select name="ds_division" id="ds_division">
            <option value="division1">Division 1</option>
            <option value="division2">Division 2</option>
            <!-- Add more divisions here -->
        </select><br>
        <label for="purpose">Purpose of the Project:</label>
        <input type="text" name="purpose" id="purpose"><br>

        <h3>Terms and Condition</h3>
        <label for="effective_interest_rate">Effective Rate of Interest of Loan(%):</label>
        <input type="text" name="effective_interest_rate" id="effective_interest_rate"><br>
        <label for="borrower_interest_rate">Interest rate to the Borrower(%):</label>
        <input type="text" name="borrower_interest_rate" id="borrower_interest_rate"><br>
        <label for="interest_subsidy">Interest Subsidy by the GOSL(%):</label>
        <input type="text" name="interest_subsidy" id="interest_subsidy"><br>
        <label for="repayment_period">Loan Repayment period (Including grace) in Months:</label>
        <input type="text" name="repayment_period" id="repayment_period"><br>
        <label for="grace_period">Grace period in Months:</label>
        <input type="text" name="grace_period" id="grace_period"><br>
        <label for="security">Security:</label>
        <select name="security" id="security">
            <option value="security1">Security 1</option>
            <option value="security2">Security 2</option>
            <!-- Add more security options here -->
        </select><br>

        <button type="submit">Save</button>
        <button type="reset">Clear</button>
    </form>

    <script>
        // JavaScript function to add a new row for an applicant
        function addApplicant() {
            var table = document.getElementById("added_applicants");
            var newRow = table.insertRow(table.rows.length);
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            var cell4 = newRow.insertCell(3);
            var cell5 = newRow.insertCell(4);
            var cell6 = newRow.insertCell(5);

            cell1.innerHTML = '<button type="button" onclick="deleteRow(this)">Delete</button>';
            cell2.innerHTML = '<button type="button" onclick="editRow(this)">Edit</button>';
            cell3.innerHTML = '<input type="text" name="added_applicant_name[]">';
            cell4.innerHTML = '<input type="text" name="added_applicant_address[]">';
            cell5.innerHTML = '<input type="text" name="added_applicant_contact_no[]">';
            cell6.innerHTML = '<input type="text" name="added_applicant_nic[]">';
        }

        // JavaScript function to delete a row for an applicant
        function deleteRow(row) {
            var rowIndex = row.parentNode.parentNode.rowIndex;
            document.getElementById("added_applicants").deleteRow(rowIndex);
        }

        // JavaScript function to edit a row for an applicant
        function editRow(row) {
            // You can implement edit functionality here if needed
        }
    </script>
</body>
</html>
