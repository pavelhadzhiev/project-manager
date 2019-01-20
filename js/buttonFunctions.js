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
  window.open('taskForm.php','popup','width=400,height=500');
}

function openProjectView() {
  window.open('projectForm.php','popup','width=400,height=260');
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

// Hide project dropdown list initially
toggleProjectDropdown();

// Add a class to the project button to mark out-of-button clicks
var markClass = 'dropdown-button';
document.getElementById('chooseProjectButton').classList.add(markClass);

// Set up event handler to hide dropdown list on clicks outside it
window.onclick = function(event) {
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
