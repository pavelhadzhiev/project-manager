<!DOCTYPE html>
<html>
	<head>
		<title> Task View </title>
    <link href="styles/form.css" rel="stylesheet" type="text/css">
    <link href="styles/helper.css" rel="stylesheet" type="text/css">
    <script src="js/validation/task.js"></script>
    <?php include 'php/submitTask.php';?>
	</head>
	<body>
    <div class="formStyle">
      <h1 class=> Task Submission Form </h1>
      <form id="taskForm" method="POST" action="" onsubmit="return taskValidation()">
        <input type="text" placeholder="Title" name="title">
        <div class="selectWrapper">
          <select name="type">
            <option value="feature"> Feature </option>
            <option value="bug"> Bug </option>
            <option value="improvement"> Improvement </option>
            <option value="reaserch"> Reaserch </option>
          </select>
          <select name="priority">
            <option value="critical"> Critical </option>
            <option value="high"> High </option>
            <option value="medium"> Medium </option>
            <option value="low"> Low </option>
          </select>
          <select name="status">
            <option value="toDo"> To Do </option>
            <option value="inProgress"> In Progress </option>
            <option value="forReview"> For Review </option>
            <option value="done"> Done </option>
          </select>
        </div>
        <input type="text" placeholder="Description" name="description">

        <input type="submit" value="Submit Task" name="submitTask">

        <?php 
          if (isset($submittedTask)) {
            echo "Successfully submitted task \"".$submittedTask."\" to project \"".$_SESSION['project']."\"!";
            echo "<script> window.location.href='index.php'; </script>";
          } 
        ?>
        <div class="errors"></div>
      </form>
    </div>
  </body>
</html>