<?php

include("connection.php");


/*
$user : "ju" ou "gul" ou "lio"
$progress : "encours" ou "avenir" ou "termine"
*/

function getTodoInfo($user,$progress) {
  global $mysqli;
  $stmt = ("SELECT title FROM todo WHERE user = '".$user."' AND progress = '".$progress."'");

  $result = $mysqli->query($stmt);
  while ($row = $result->fetch_assoc()) {
        printf ($row['title']);
    }
}



if (isset($_GET['user']) && isset($_GET['etat']) && isset($_GET['title']) ) {

  $user = $_GET['user'];
  $etat = $_GET['etat'];
  $title = $_GET['title'];

  global $mysqli;
  $stmt = ("INSERT INTO todo (user, title, progress, estimated_time) VALUES ('".$user."', '".$title."', '".$etat."', 10) ");
  $mysqli->query($stmt);
  header("Location: http://www.localhost/crm/index.php");
  
}

















?>
