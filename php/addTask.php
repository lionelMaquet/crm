<?php

// Accès en AJAX

require 'connection.php';

$taskDescription = addslashes($_GET['description']) ;
$user = $_GET['username'];
$projet_id = $_GET['projectID'];

$sql = "INSERT INTO `tache` (`projet_id`, `utilisateur`, `description`) VALUES ('".$projet_id."', '".$user."', '".$taskDescription."')";
$conn->query($sql);

exit();

 ?>
