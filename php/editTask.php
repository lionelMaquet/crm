<?php

require 'connection.php';
$taskID = $_GET['taskid'];

$sql = "SELECT `fait` FROM tache WHERE tache_id = " . $taskID;
$result = $conn->query($sql);



$statutActuel;


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $statutActuel = $row['fait'];
    }
}


if ($statutActuel == 'oui') {
  $sql = "UPDATE tache SET `fait` = 'non' WHERE `tache_id` = ".$taskID;
  $result = $conn->query($sql);
  echo "fait updaté en 'non'";
} else if($statutActuel == 'non' ){
  $sql = "UPDATE tache SET `fait` = 'oui' WHERE `tache_id` = ".$taskID;
  $result = $conn->query($sql);
  echo "fait updaté en 'oui'";
}



 ?>
