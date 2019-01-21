<?php
    include 'sqlConfig.php';

    if (!isset($_SESSION)) {
        session_start();
    }
    
    if (isset($_POST['createProject'])) {
        $name = $_POST['name'];

        $fetchByName = "SELECT * FROM projects where name='$name'";
        $fetchByNameQuery = $db->query($fetchByName) or die("failed!");
        $user = $fetchByNameQuery->fetch(PDO::FETCH_ASSOC);

        $createdProject = false;
        $error = "";
        if ($user != null) {
            $error = "Project already exists!";
        } else {
            $_SESSION['project'] = $name;
            $insertProjectSql = "INSERT INTO projects (name) VALUES (?)";
            $insertProjectStmt = $db->prepare($insertProjectSql);
            $insertProjectStmt->execute([$name]);
            $createdProject = true;
        }
    }
?>