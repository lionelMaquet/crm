<?php

$projectTitle = $_POST['projectTitle'];



$projectDate = date("Y-m-d", strtotime($_POST['projectDate']));

$briefing = $_POST['briefing'];
$remarques = $_POST['remarques'];
$userJ = $_POST['userJ'];
$userG = $_POST['userG'];
$userL = $_POST['userL'];


/* AJOUT RENVOI SI MANQUE D'INFOS */


function addProjects($projectTitle, $projectDate, $briefing, $remarques, $userJ, $userG, $userL ) {
  require 'connection.php';

  $sql = "INSERT INTO `projet` (`projet_id`, `titre`, `description`, `remarque`, `julien`, `gilles`, `lionel`, `deadline`, `statut`, `client_id`)
  VALUES (NULL, '".$projectTitle."', '".$briefing."', '".$remarques."', '".$userJ."', '".$userG."', '".$userL."', '".$projectDate."', 'avenir', NULL);";


  $conn->query($sql);


}


addProjects($projectTitle, $projectDate, $briefing, $remarques, $userJ, $userG, $userL);
header("Location: ../projet.php"); // A CHANGER !!!
exit();



 ?>
