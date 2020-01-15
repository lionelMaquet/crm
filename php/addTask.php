<?php

// Accès en AJAX


$taskDescription = addslashes($_GET['description']) ;
$user = $_GET['username'];
$projet_id = $_GET['projectID'];



require 'connection.php';

$sql = "INSERT INTO `tache` (`projet_id`, `utilisateur`, `description`) VALUES ('".$projet_id."', '".$user."', '".$taskDescription."')";
$conn->query($sql);

exit();

 ?>
