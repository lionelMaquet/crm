<?php

$projectID = $_GET['id'];
$oldStatut = $_GET['statut'];

$newStatut;
if ($oldStatut == "avenir") {
  $newStatut = "encours";

} else if ( $oldStatut == "encours") {
  $newStatut = "termine";
} else if ($oldStatut == "termine") {
  $newStatut = "encours";
}

require 'connection.php';

$sql = "UPDATE projet SET statut = '".$newStatut."' WHERE projet_id = ".$projectID;


$conn->query($sql);
echo $newStatut;



 ?>
