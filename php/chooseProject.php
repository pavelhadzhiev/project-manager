<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    
    $db = new PDO('mysql:host=localhost;dbname=FMI;charset=utf8', 'root', '');

    $fetchAll = "SELECT * FROM projects";
    $fetchAllQuery = $db->query($fetchAll) or die("failed!");
    $projects = $fetchAllQuery->fetchAll();

    foreach ($projects as $value) {
        echo "<button class='dropbutton project'>".$value['name']."</button>";
    }
?>