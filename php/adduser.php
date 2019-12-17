<?php

$user = $_GET['user'];
$projectID = $_GET['id'];

require 'connection.php';

$sql = "UPDATE projet SET ".$user."='oui' WHERE projet_id = ".$projectID;


$conn->query($sql);



 ?>
