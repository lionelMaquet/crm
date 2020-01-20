<?php

// PAGE WHEN ADDING A PROJECT

$projectTitle = addslashes($_POST['projectTitle']);
$projectDate = date("Y-m-d", strtotime($_POST['projectDate']));
$briefing = addslashes($_POST['briefing']);
$remarques = addslashes($_POST['remarques']);
$userJ = addslashes($_POST['userJ']);
$userG = addslashes($_POST['userG']);
$userL = addslashes($_POST['userL']);

function addProjects($projectTitle, $projectDate, $briefing, $remarques, $userJ, $userG, $userL ) {
  require 'connection.php';

  $sql = "INSERT INTO `projet` (`projet_id`, `titre`, `description`, `remarque`, `julien`, `gilles`, `lionel`, `deadline`, `statut`, `client_id`)
  VALUES (NULL, '".$projectTitle."', '".$briefing."', '".$remarques."', '".$userJ."', '".$userG."', '".$userL."', '".$projectDate."', 'avenir', NULL);";
  $conn->query($sql);

}

addProjects($projectTitle, $projectDate, $briefing, $remarques, $userJ, $userG, $userL);
header("Location: ../projet.php");
exit();

 ?>
