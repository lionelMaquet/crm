<?php

require 'connection.php';

$projectID = $_GET['id'];
$briefing = $_GET['briefing'];
$remarque = $_GET['remarque'];

$sql = "UPDATE projet SET description ='".$briefing."'  WHERE projet_id = ".$projectID;
echo $sql;
$conn->query($sql);
$sql = "UPDATE projet SET remarque ='".$remarque."'  WHERE projet_id = ".$projectID;
$conn->query($sql);

?>
