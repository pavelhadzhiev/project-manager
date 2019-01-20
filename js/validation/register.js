function registerValidation() {
    var elements = document.getElementById("registerForm").elements;
    var username = elements['username'].value;
    var password = elements['password'].value;
    var repeatPassword = elements['repeatPassword'].value;

    if (username == "") {
        alert("Username is empty!");
        return false;
    }
    if (password == "") {
        alert("Password is empty!");
        return false;
    }
    if (password !== repeatPassword) {
        alert("Passwords do not match!");
        return false;
    }
    return true;
}