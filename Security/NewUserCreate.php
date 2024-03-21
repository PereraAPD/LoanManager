<!DOCTYPE html>
<html lang="en">

<body>
    <!-- Content goes here -->
    <form action="process_new_user.php" method="post">
    <label for="company">Company:</label>
    <select id="company" name="company" required>
        <option value="company1">Company 1</option>
        <option value="company2">Company 2</option>
        <!-- Add more options as needed -->
    </select>

    <label for="location">Location:</label>
    <select id="location" name="location" required>
        <option value="location1">Location 1</option>
        <option value="location2">Location 2</option>
        <!-- Add more options as needed -->
    </select>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>

    <label for="user_type">Select User Type:</label>
    <select id="user_type" name="user_type" required>
        <option value="admin">Admin</option>
        <option value="user">User</option>
        <!-- Add more options as needed -->
    </select>

    <input type="checkbox" id="apply_date_period" name="apply_date_period">
    <label for="apply_date_period">Apply Date Period</label><br>

    <div id="date_period_fields">
        <label for="from_date">From Date:</label>
        <input type="date" id="from_date" name="from_date" disabled>
        
        <label for="to_date">To Date:</label>
        <input type="date" id="to_date" name="to_date" disabled>
    </div>

    <input type="checkbox" id="password_expire_within" name="password_expire_within">
    <label for="password_expire_within">Password Expire Within</label><br>

    <div id="password_expire_fields">
        <label for="expire_period">Expire Period:</label>
        <select id="expire_period" name="expire_period" disabled>
            <option value="1_month">1 Month</option>
            <option value="3_months">3 Months</option>
            <option value="6_months">6 Months</option>
            <option value="1_year">1 Year</option>
        </select>
    </div>

    <button type="submit" id="save_button">Save</button>
    <button type="button" id="new_button">New</button>
</form>
<script>
    document.getElementById('apply_date_period').addEventListener('change', function() {
        var datePeriodFields = document.getElementById('date_period_fields').querySelectorAll('input, select');
        datePeriodFields.forEach(function(field) {
            field.disabled = !this.checked;
        }, this);
    });

    document.getElementById('password_expire_within').addEventListener('change', function() {
        var passwordExpireFields = document.getElementById('password_expire_fields').querySelectorAll('input, select');
        passwordExpireFields.forEach(function(field) {
            field.disabled = !this.checked;
        }, this);
    });

    document.getElementById('new_button').addEventListener('click', function() {
        document.getElementById('save_button').innerText = 'Save';
        document.getElementById('user_form').reset();
    });
</script>
    
</body>
</html>
