<?php
    include 'sqlConfig.php';

    if (!isset($_SESSION)) {
        session_start();
    }
        
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $fetchByUsername = "SELECT * FROM users where username='$username'";
        $fetchByUsernameQuery = $db->query($fetchByUsername) or die("failed!");
        $user = $fetchByUsernameQuery->fetch(PDO::FETCH_ASSOC);

        $loggedIn = false;
        $error = "";

        if ($user == null) {
            $error = "User not found!";
        } else if ($user['password'] == $password) {
            $_SESSION['user'] = $username;
            $loggedIn = true;
        } else {
            $error = "Wrong password!";
        }
}
?>