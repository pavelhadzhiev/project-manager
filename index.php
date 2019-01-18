
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
    <header class="bordered">
      <nav>
        <h1> Project Management </h1>
        <button id="loginButton" onclick="login()"> Login </button>
        <button id ="aboutButton"> About </button>
        <button id ="tasksButton" onclick ="openTasksView()"> Tasks</button>
        <button id ="projectsButton" onclick="chooseProject()"> Projects</button>
      </nav>
    </header>
    <h2 class ="bordered" id="projectTitle"> My Project </h2>
  
    <div class="tasksContent">
      <div class="taskHeaders">
          <h3 id="toDo" class="taskHeader bordered">To Do</h3>
          <h3 id="inProgress" class="taskHeader bordered">In Progress</h3>
          <h3 id="forReview" class="taskHeader bordered">For Review</h3>
          <h3 id="done" class="taskHeader bordered">Done</h3>
      </div>
      <div class="taskColumns">
        <ul id="toDoTasks" class="taskColumn bordered">
          <li class="task bordered"> Task 1 - Some task</li>
          <li class="task bordered"> Task 2 - One with a very very long description </li>
        </ul>
        <ul id="inProgressTasks" class="taskColumn bordered">
          <li class="task bordered"> Task 1 - Some task </li>
          <li class="task bordered"> Task 2 - One with a very very long description </li>
        </ul>
        <ul id="forReviewTasks" class="taskColumn bordered">
          <li class="task bordered"> Task 1 - Some task </li>
          <li class="task bordered"> Task 2 - One with a very very long description </li>
        </ul>
        <ul id="doneTasks" class="taskColumn bordered">
          <li class="task bordered"> Task 1 - Some task </li>
          <li class="task bordered"> Task 2 - One with a very very long description </li>
        </ul>
      </div>
    </div>

    <footer>My footer</footer>
    <?php include 'php/db.php';?>
    <script src="js/buttonFunctions.js"></script>
  </body>
</html>