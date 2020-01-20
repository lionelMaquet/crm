<?php

 require 'connection.php';
 $user = $_GET['user'];
 $project_ID = $_GET['id'];

 $sql = "UPDATE `projet` SET `".$user."` = 'non' WHERE `projet_id` = ".$project_ID;
 $conn->query($sql);

 exit();

 ?>
