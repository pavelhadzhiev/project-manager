function loginValidation() {
    var elements = document.getElementById("loginForm").elements;
    var username = elements['username'].value;
    var password = elements['password'].value;

    if (username == "") {
        alert("Username is empty!");
        return false;
    }
    if (password == "") {
        alert("Password is empty!");
        return false;
    }
    return true;
}