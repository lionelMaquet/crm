<?php

$projectTitle = $_POST['projectTitle'];
$projectDate = date("Y-m-d", strtotime($_POST['projectDate']));
$briefing = $_POST['briefing'];
$remarques = $_POST['remarques'];

/* AJOUT RENVOI SI MANQUE D'INFOS */


function addProjects($projectTitle, $projectDate, $briefing, $remarques ) {
  require 'connection.php';

  $sql = "INSERT INTO `projet` (`projet_id`, `titre`, `description`, `remarque`, `julien`, `gilles`, `lionel`, `deadline`, `statut`, `client_id`)
  VALUES (NULL, '".$projectTitle."', '".$briefing."', '".$remarques."', 'oui', 'oui', 'oui', '".$projectDate."', 'avenir', NULL);";

  echo ($sql);
  $conn->query($sql);
  echo $sql;

}


addProjects($projectTitle, $projectDate, $briefing, $remarques);
//header("Location: ../projet.php"); // A CHANGER !!!
exit();



 ?>
