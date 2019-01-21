<?php
    include 'sqlConfig.php';

    if (!isset($_SESSION)) {
        session_start();
    }
    
    if (isset($_POST['submitTask'])) {
        $title = $_POST['title'];
        $type = $_POST['type'];
        $priority = $_POST['priority'];
        $description = $_POST['description'];
        $status = $_POST['status'];
        $projectName = $_SESSION['project'];

        $insertProjectSql = "INSERT INTO tasks (title, type, priority, description, projectName, status) VALUES (?, ?, ?, ?, ?, ?)";
        $insertProjectStmt = $db->prepare($insertProjectSql);
        $insertProjectStmt->execute([$title, $type, $priority, $description, $projectName, $status]);
        $submittedTask = $title;
    }
?>