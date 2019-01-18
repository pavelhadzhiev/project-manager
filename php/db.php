<?php 
  $db = new PDO('mysql:host=localhost;dbname=FMI;charset=utf8', 'root', '');
  
  $id = 1;
  $fetchById = "SELECT * FROM electives where id='".$id."'";
  $fetchByIdQuery = $db->query($fetchById) or die("failed!");
  $elective = $fetchByIdQuery->fetch(PDO::FETCH_ASSOC);

  $defaultTitle = $elective['title'];
  $defaultDescription = $elective['description'];
  $defaultLecturer = $elective['lecturer'];
  
  echo $defaultTitle;
  ?>