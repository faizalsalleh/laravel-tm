document.addEventListener('DOMContentLoaded', function () {
    const loginErrorInput = document.getElementById('login-error');
    if (loginErrorInput) {
        const loginError = loginErrorInput.value;
        if (loginError === 'wrong_email') {
            alert('Wrong email');
        } else if (loginError === 'incorrect_password') {
            alert('Password is incorrect please try again');
        }
    }
});
