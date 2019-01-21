function openRegisterView() {
  window.location.href='registerForm.php';
}

function openLoginView() {
  window.location.href='loginForm.php';
}

function logout() {
  window.location.href='php/logout.php';
}

function openTaskView() {
  window.location.href='taskForm.php';
}

function openProjectView() {
  window.location.href='projectForm.php';
}

function toggleProjectDropdown() {
  var i;
  var dropbuttons = document.getElementsByClassName("dropbutton")
  for (i = 0; i < dropbuttons.length; i++) {
    var dropbutton = dropbuttons[i];
    dropbutton.classList.toggle('hide');
  }
}

// Helper function to hide project dropdown list
function hideDropdown() {
  var i;
  var dropbuttons = document.getElementsByClassName("dropbutton")
  for (i = 0; i < dropbuttons.length; i++) {
    var dropbutton = dropbuttons[i];
    if (!dropbutton.classList.contains('hide')) {
      dropbutton.classList.add('hide');
    }    
  }
}

function selectProject() {

}

// Hide project dropdown list initially
toggleProjectDropdown();

// Add a class to the project button to mark out-of-button clicks
var markClass = 'dropdown-button';
document.getElementById('chooseProjectButton').classList.add(markClass);

// Set up event handler to hide dropdown list on clicks outside of it
// And to select the specific project on clicks in the dropdown list
window.onclick = function(event) {
  if(event.target.matches(".project")){
    window.location.href='index.php?project=' + event.target.innerHTML.trim();
  }
  if(!event.target.matches("." + markClass)){
    hideDropdown();
  }
};

// Set up event handler to hide dropdown list on pressing escape
window.onkeydown = function( event ) {
  if ( event.keyCode == 27 ) { // 27 = esc
    hideDropdown();
  }
};
