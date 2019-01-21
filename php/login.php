<?php
    if (!isset($_SESSION)) {
        session_start();
    }
        
    $db = new PDO('mysql:host=localhost;dbname=FMI;charset=utf8', 'root', '');

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