<!DOCTYPE html>
<html>
	<head>
		<title> Project View </title>
    <link href="styles/form.css" rel="stylesheet" type="text/css">
    <link href="styles/helper.css" rel="stylesheet" type="text/css">
    <script src="js/validation/project.js"></script>
    <?php include 'php/createProject.php';?>
	</head>
	<body>
    <div class="formStyle">
      <h1> Project Creation Form </h1>
      <form id="projectForm" method="POST" action="" onsubmit="return projectValidation()">
        <input type="text" placeholder="Project Name" name="name">

        <input type="submit" value="Create Project" name="createProject">
        
        <?php 
          if (isset($createdProject) && $createdProject) {
            echo "Successfully created project \"".$_SESSION['project']."\"!";
            echo "<script> window.location.href='index.php'; </script>";
          }
        ?>
        <div class="errors">
          <?php 
            if (isset($createdProject) && !$createdProject) {
              echo "<ul class='errorList bordered'>
                      <li class='error'> $error </li>
                    </ul>";
            }
          ?>
        </div>

      </form>
    </div>
  </body>
</html>