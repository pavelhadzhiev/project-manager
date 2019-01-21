<?php
    include 'sqlConfig.php';

    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $fetchByUsername = "SELECT * FROM users where username='".$username."'";
        $fetchByUsernameQuery = $db->query($fetchByUsername) or die("failed!");
        $user = $fetchByUsernameQuery->fetch(PDO::FETCH_ASSOC);

        $registered = false;
        $error = "";
        if ($user != null) {
            $error = "User already exists!";
        } else {
            $_SESSION['user'] = $username;
            $insertUserSql = "INSERT INTO users (username, password) VALUES (?,?)";
            $insertUserStmt = $db->prepare($insertUserSql);
            $insertUserStmt->execute([$username, $password]);
            $registered = true;
        }
    }
?>