<?php

require 'connection.php';

  $sql = "DELETE FROM tache WHERE tache_id =".$_GET['taskid']  ;
  $result = $conn->query($sql);

 ?>
