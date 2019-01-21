var validationErrors;
var validInput;

function registerValidation() {
    var elements = document.getElementById('registerForm').elements;
    var username = elements['username'].value;
    var password = elements['password'].value;
    var repeatPassword = elements['repeatPassword'].value;
    validationErrors = '<ul class="errorList bordered">';
    validInput = true;

    if (username == '') {
        addError('Username is empty!');
    }
    if (password == '') {
        addError('Password is empty!');
    }
    if (password !== repeatPassword) {
        addError('Passwords do not match!');
    }
    if (!validInput) {
        validationErrors += '</ul>';
        document.getElementsByClassName('errors')[0].innerHTML = validationErrors;
        return false;
    }

    return true;
}

function addError(error) {
    validationErrors += '<li class="error">' + error + '</li>';
    validInput = false;
}