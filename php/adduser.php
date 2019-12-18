<?php

require 'connection.php';

$user = $_GET['user'];
$projectID = $_GET['id'];

$sql = "UPDATE projet SET ".$user."='oui' WHERE projet_id = ".$projectID;
$conn->query($sql);

 ?>
