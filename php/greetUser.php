<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    
    if (isset($_SESSION['user'])) {
        echo 'Greetings, <i>'.$_SESSION['user'].'</i>! Enjoy your project planning.';
    } else {
        echo "Hello, stranger. Please either login or register!";
    }
?>