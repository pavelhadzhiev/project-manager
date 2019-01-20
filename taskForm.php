<!DOCTYPE html>
<html>
	<head>
		<title> Task View </title>
    <link href="styles/form.css" rel="stylesheet" type="text/css">
    <script src="js/closeableForm.js"></script>
    <script src="js/validation/task.js"></script>
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
        </div>
        <input type="text" placeholder="Description" name="description">

        <input type="submit" value="Submit Task" name="submitTask">
      </form>
    </div>
  </body>
</html>