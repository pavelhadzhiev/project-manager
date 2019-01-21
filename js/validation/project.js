function projectValidation() {
    var elements = document.getElementById("projectForm").elements;
    var name = elements['name'].value;

    if (name == "") {
        var error = '<ul class="errorList bordered"> <li class="error"> Name is empty! </li></ul>';
        document.getElementsByClassName('errors')[0].innerHTML = error;
        return false;
    }

    return true;
}