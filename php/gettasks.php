<?php

function displayTask($task){

  echo '<br>';

  echo $task['description'];

}


function getTasks($user, $projet_id) {

  require 'connection.php';

    $sql;
    $result;

    if ($user == 'all') {

      $sql = "SELECT * FROM tache WHERE projet_id = ".$projet_id."  ";
      $result = $conn->query($sql);

    }

    else if ($user == 'julien' || $user =='gilles' || $user == 'lionel') {

    $sql = "SELECT * FROM tache WHERE utilisateur = '".$user."' AND projet_id = ". $projet_id ;
    $result = $conn->query($sql);


    }



    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            displayTask($row);
        }
    }

}

if (isset($_GET['user']) && isset($_GET['projet_id'])){
  getTasks($_GET['user'], $_GET['projet_id']);
}