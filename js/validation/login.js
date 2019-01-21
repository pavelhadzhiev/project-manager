var validationErrors;
var validInput;

function loginValidation() {
    var elements = document.getElementById("loginForm").elements;
    var username = elements['username'].value;
    var password = elements['password'].value;
    validationErrors = '<ul class="errorList bordered">';
    validInput = true;

    if (username == "") {
        addError("Username is empty!");
    }
    if (password == "") {
        addError("Password is empty!");
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