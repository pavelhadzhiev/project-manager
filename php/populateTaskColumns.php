<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    
    $db = new PDO('mysql:host=localhost;dbname=FMI;charset=utf8', 'root', '');

    $fetchAll = "SELECT * FROM tasks WHERE projectName='".$_SESSION['project']."'";
    $fetchAllQuery = $db->query($fetchAll) or die("failed!");
    $tasks = $fetchAllQuery->fetchAll();

    $toDoTasksHtml = "";
    $inProgressTasksHtml = "";
    $forReviewTasksHtml = "";
    $doneTasksHtml = "";
    foreach ($tasks as $value) {
        $htmlString = "<li class='task bordered'> Task ".$value['id']." - ".$value['title']."</li>";
        switch ($value['status']) {
            case 'toDo':
                $toDoTasksHtml .= $htmlString;
                break;
            case 'inProgress':
                $inProgressTasksHtml .= $htmlString;
            break;
            case 'forReview':
                $forReviewTasksHtml .= $htmlString;
                break;
            case 'done':
                $doneTasksHtml .= $htmlString;
                break;
        }
    }
?>