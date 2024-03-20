
    // Enable confirm password field when typing password
    document.getElementById('password').addEventListener('input', function() {
        document.getElementById('confirm_password').disabled = false;
    });

    // Show/hide date period fields based on checkbox state
    document.getElementById('apply_date_period').addEventListener('change', function() {
        var datePeriodFields = document.getElementById('date_period_fields');
        datePeriodFields.style.display = this.checked ? 'block' : 'none';
    });

    // Show/hide password expire fields based on checkbox state
    document.getElementById('password_expire_within').addEventListener('change', function() {
        var passwordExpireFields = document.getElementById('password_expire_fields');
        passwordExpireFields.style.display = this.checked ? 'block' : 'none';
    });

    // Functionality for New button to reset form fields
    document.getElementById('new_button').addEventListener('click', function() {
        document.getElementById('save_button').innerText = 'Save';
        document.getElementById('user_form').reset();
    });