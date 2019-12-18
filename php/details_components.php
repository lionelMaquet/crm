<?php

require "connection.php";

$id = $_SESSION['details_id'];
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
    $stringToReturn .= "<p>Julien</p>";
  } else {
    $stringToReturn .= "<p class='hidden hiddenColor' onclick='addUser(`julien`,".$id.")' >Julien</p>";
  }

  if ($gilles == 'oui') {
    $stringToReturn .= "<p>Gilles</p>";
  } else {
    $stringToReturn .= "<p class='hidden hiddenColor' onclick='addUser(`gilles`,".$id.")' >Gilles</p>";
  }

  if ($lionel == 'oui') {
    $stringToReturn .= "<p>Lionel</p>";
  } else {
    $stringToReturn .= "<p class='hidden hiddenColor' onclick='addUser(`lionel`,".$id.")' >Lionel</p>";
  }

  return $stringToReturn;

}


?>
