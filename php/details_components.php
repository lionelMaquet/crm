<?php

require "connection.php";

$id = $details_id; // variable definie dans details.php, page accedant à celle-ci
$sql = "SELECT * FROM projet WHERE projet_id = '".$id."'";
$data = $conn->query($sql);

$projectResult = $data->fetch_assoc();
$titre = $projectResult['titre'];
$description = $projectResult['description'];
$remarque = $projectResult['remarque'];
$julien = $projectResult['julien'];
$gilles = $projectResult['gilles'];
$lionel = $projectResult['lionel'];
$deadline = $projectResult['deadline'];
$statut = $projectResult['statut'];
$clientid = $projectResult['client_id'];

function getStatut(){
  global $statut;

  if ($statut == 'avenir') {
    return 'A venir';
  }

  if ($statut == 'encours') {
    return "En cours";
  }

  if ($statut == "termine") {
    return "Terminé";
  }

}

function getUsers(){

  global $julien, $gilles, $lionel, $id;
  $stringToReturn = "";

  if ($julien == 'oui') {
    $stringToReturn .= "<p id='julien' class='username' onclick='toggleUserParticipation(`julien`,".$id.")'>Julien</p>";
  } else {
    $stringToReturn .= "<p id='julien' class='username hidden hiddenColor' onclick='toggleUserParticipation(`julien`,".$id.")'>Julien</p>";
  }

  if ($gilles == 'oui') {
    $stringToReturn .= "<p id='gilles' class='username' onclick='toggleUserParticipation(`gilles`,".$id.")'>Gilles</p>";
  } else {
    $stringToReturn .= "<p id='gilles' class='username hidden hiddenColor' onclick='toggleUserParticipation(`gilles`,".$id.")' >Gilles</p>";
  }

  if ($lionel == 'oui') {
    $stringToReturn .= "<p id='lionel' class='username' onclick='toggleUserParticipation(`lionel`,".$id.")'>Lionel</p>";
  } else {
    $stringToReturn .= "<p id='lionel' class='username hidden hiddenColor' onclick='toggleUserParticipation(`lionel`,".$id.")' >Lionel</p>";
  }

  return $stringToReturn;

}


?>
