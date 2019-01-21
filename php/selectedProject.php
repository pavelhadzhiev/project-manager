<?php 
    if (!isset($_SESSION)) {
        session_start();
    }
    
    if (isset($_GET['project'])) {
        $project = $_GET['project'];
        $_SESSION['project'] = $project;
        echo $project;
    } else if (isset($_SESSION['project'])) {
        echo $_SESSION['project'];
    } else {
        echo "Choose a Project";
    }
?>