function taskValidation() {
    var elements = document.getElementById("taskForm").elements;
    var title = elements['title'].value;
    var description = elements['description'].value;
    
    if (title == "") {
        alert("Title is empty!");
        return false;
    }
    if (description == "") {
        alert("Description is empty!");
        return false;
    }
    return true;
}