function projectValidation() {
    var elements = document.getElementById("projectForm").elements;
    var name = elements['name'].value;

    if (name == "") {
        alert("Name is empty!");
        return false;
    }
    return true;
}