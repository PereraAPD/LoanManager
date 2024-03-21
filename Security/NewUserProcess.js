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