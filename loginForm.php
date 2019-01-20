<!DOCTYPE html>
<html>
	<head>
		<title> Login View </title>
    <link href="styles/form.css" rel="stylesheet" type="text/css">
    <script src="js/closeableForm.js"></script>
    <script src="js/validation/login.js"></script>
    <?php include 'php/login.php';?>
	</head>
	<body>
    <div class="formStyle">
      <h1> Login Form </h1>
      <form id="loginForm" method="POST" action="" onsubmit="return loginValidation()">
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">

        <input type="submit" value="Login" name="login">
        <p> 
          <?php 
          if (isset($loggedIn)) {
            if($loggedIn) {
              echo "Successfully logged in, ".$_SESSION['user']."!";
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