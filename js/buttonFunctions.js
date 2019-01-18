function login() {
  alert("You're trying to log in!")
}

function chooseProject() {
  var projectName = prompt("Which is your project?");
  if (projectName != null && projectName != "") {
    document.getElementById("projectTitle").innerHTML = projectName;
  }
}

function openTasksView() {
  window.open('tasks.html','popup','width=600,height=600'); return false;
}