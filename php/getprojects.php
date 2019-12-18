<?php

function display($row) {

  echo "<a href=php/details.php?id=".$row['projet_id'].">";
    echo "<li class='li_project'>";
        echo "<div class='div_li_project'>";

          echo "<h2>".$row["titre"]."</h2>";
          echo "<p>".date("d-m-Y", strtotime($row["deadline"]))."</p>";

        echo "</div>";
    echo "</li>";
  echo "</a>";

  echo "<br>";
}

function getProjects($statut) {

  require 'connection.php';

  $sql;

  if ($_GET["user"] == "all") {

    $sql = "SELECT * FROM projet WHERE statut = '".$statut."'";

  }

  else {
    $sql = "SELECT * FROM projet WHERE statut = '".$statut."' AND ".$_GET["user"]." = 'oui' ";
  }

  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          display($row);
      }
  } else {
      echo "aucun projet";
  }
}

if ((isset($_GET['q']) && ($_GET != null))){
  getProjects($_GET['q']);
}


 ?>
