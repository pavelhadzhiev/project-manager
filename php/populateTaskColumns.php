<?php
    include 'sqlConfig.php';

    if (!isset($_SESSION)) {
        session_start();
    }
    
    $toDoTasksHtml = '';
    $inProgressTasksHtml = '';
    $forReviewTasksHtml = '';
    $doneTasksHtml = '';

    if(isset($_SESSION['project'])) {
        $fetchAll = "SELECT * FROM tasks WHERE projectName='".$_SESSION['project']."'";
        $fetchAllQuery = $db->query($fetchAll) or die("failed!");
        $tasks = $fetchAllQuery->fetchAll();

        $toDoTasksHtml .= '<ul id="toDoTasks" class="taskColumn bordered">';
        $inProgressTasksHtml .= '<ul id="inProgressTasks" class="taskColumn bordered">';
        $forReviewTasksHtml .= '<ul id="forReviewTasks" class="taskColumn bordered">';
        $doneTasksHtml .= '<ul id="doneTasks" class="taskColumn bordered">';
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

        $toDoTasksHtml .= '</ul>';
        $inProgressTasksHtml .= '</ul>';
        $forReviewTasksHtml .= '</ul>';
        $doneTasksHtml .= '</ul>';
    }
?>