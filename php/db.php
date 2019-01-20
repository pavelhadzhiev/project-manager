<?php 
  $db = new PDO('mysql:host=localhost;dbname=FMI;charset=utf8', 'root', '');
  
  // $fetchById = "SELECT * FROM electives where id='".$id."'";
  // $fetchByIdQuery = $db->query($fetchById) or die("failed!");
  // $elective = $fetchByIdQuery->fetch(PDO::FETCH_ASSOC);

  // $defaultTitle = $elective['title'];
  // $defaultDescription = $elective['description'];
  // $defaultLecturer = $elective['lecturer'];
  
  // $insertSql = "INSERT INTO tasks (id, title, type, priority) VALUES (?,?,?,?)";
  // $insertStmt = $db->prepare($insertSql);
  // $insertStmt->execute([15, 'Task 1', 'bug', 5]);

  $id = 15;
  $fetchById = "SELECT * FROM tasks where id='".$id."'";
  $fetchByIdQuery = $db->query($fetchById) or die("failed!");
  $task = $fetchByIdQuery->fetch(PDO::FETCH_ASSOC);

  echo $task['id'];
?>