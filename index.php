
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Project Management </title>
    <link rel="stylesheet" href="styles/helper.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/tasks.css">
  </head>
  <body>
    <header id="boardHeader" class="bordered">
      <nav>
        <div class="navBar">
          <h1 id="navBarTitle"> Project Management </h1>
          <button class="right" id="logoutButton" onclick="return logout()"> Logout </button>
          <button class="right" id="loginButton" onclick="return openLoginView()"> Login </button>
          <button class="right" id="registerButton" onclick="return openRegisterView()"> Register </button>
          <button class="left" id="chooseProjectButton" onclick="return toggleProjectDropdown()"> Choose Project </button>
          <button class="left" id="createProjectButton" onclick="return openProjectView()"> Create Project </button>
          <button class="left" id="taskButton" onclick ="return openTaskView()"> Submit Task </button>
        </div>
        <div class="projectList">
          <?php include 'php/chooseProject.php'; ?>
        </div>
      </nav>

    </header>
    <div id="userGreeting" class="bordered">
      <?php include 'php/greetUser.php'?>
    </div>
    <h2 id="projectTitle" class="bordered"> 
      <?php include 'php/selectedProject.php'; ?>
    </h2>
  
    <div class="tasksContent">
      <div class="taskHeaders">
          <h3 class="taskHeader bordered" id="toDoHeader"> To Do </h3>
          <h3 class="taskHeader bordered" id="inProgressHeader"> In Progress </h3>
          <h3 class="taskHeader bordered" id="forReviewHeader"> For Review </h3>
          <h3 class="taskHeader bordered" id="doneHeader"> Done </h3>
      </div>
      <div class="taskColumns">
        <?php
          include 'php/populateTaskColumns.php';
          echo $toDoTasksHtml.
               $inProgressTasksHtml.
               $forReviewTasksHtml.
               $doneTasksHtml;
        ?>
      </div>
    </div>

    <script src="js/buttonFunctions.js"></script>
  </body>
</html>