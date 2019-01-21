<!DOCTYPE html>
<html>
	<head>
		<title> Registration View </title>
    <link href="styles/form.css" rel="stylesheet" type="text/css">
    <script src="js/closeableForm.js"></script>
    <script src="js/validation/register.js"></script>
    <?php include 'php/register.php';?>
	</head>
	<body>
    <div class="formStyle">
      <h1> Registration Form </h1>
      <form id="registerForm" method="post" action="" onsubmit="return registerValidation()">
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <input type="password" placeholder="Repeat password" name="repeatPassword">

        <input type="submit" value="Register" name="register">
        <p>
          <?php 
          if (isset($registered)) {
            if($registered) {
              echo "Successfully registered, ".$_SESSION['user']."!";
              echo "<script> window.location.href='index.php'; </script>";
            } else {
              echo $error;
            }
          }
          ?> 
        </p>
      </form>
    </div>
  </body>
</html>