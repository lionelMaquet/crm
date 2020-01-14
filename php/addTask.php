<?php

// A FAIRE : remplacer par de l'ajax ! 


// PAGE WHEN ADDING A TASKS

$taskDescription = $_POST['description'];
$user = $_POST['currentUserForTasks'];
$projet_id = $_POST['projetId'];

echo $taskDescription;
echo $user;
echo $projet_id;
echo "</br>";


/* AJOUTER UNE ERREUR SI MANQUE D'INFOS */

function addTask($projet_id ,$description, $user) {
  require 'connection.php';

  $sql = "INSERT INTO `tache` (`projet_id`, `utilisateur`, `description`) VALUES ('".$projet_id."', '".$user."', '".$description."')";
  echo $sql;


  $conn->query($sql);

}

addTask($projet_id, $taskDescription, $user);

header("Location: details.php?id=".$projet_id);
exit();

 ?>
