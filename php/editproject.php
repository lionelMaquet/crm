<?php

require 'connection.php';

$projet_id = $_GET['projectID'];

if ($_GET['action'] == 'change'){

  $newTitle = $_GET['title'];
  $newDate = date("Y-m-d", strtotime($_GET['date']));

  $sql = "UPDATE projet SET `titre` = '".$newTitle."', `deadline` = '".$newDate."' WHERE `projet_id` = ".$projet_id;
  $result = $conn->query($sql);
  exit();

} else if ($_GET['action'] == 'delete'){

  $sql = "DELETE FROM `projet` WHERE `projet_id` = ".$projet_id;
  $result = $conn->query($sql);

  exit();

}




 ?>
