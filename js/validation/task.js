var validationErrors;
var validInput;

function taskValidation() {
    var elements = document.getElementById("taskForm").elements;
    var title = elements['title'].value;
    var description = elements['description'].value;
    validationErrors = '<ul class="errorList bordered">';
    validInput = true;

    if (title == "") {
        addError("Title is empty!");
    }
    if (description == "") {
        addError("Description is empty!");
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