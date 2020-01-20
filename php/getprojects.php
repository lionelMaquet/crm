<?php


function display($row) {

  $date = date("d / m / Y", strtotime($row["deadline"]));

    echo "<li class = 'li_project'>";
      echo "<a href=php/details.php?id=".$row['projet_id'].">";
        echo "<div class='div_li_project'>";

          echo "<h2>".$row["titre"]."</h2>";
          echo "<textarea class='hidden' rows='1'></textarea>";

          if ($date == '01 / 01 / 1970') { // si la date est celle se mettant de base en mysql
            echo "<p> deadline indefinie </p>";
          } else {echo "<p data-value ='".date("d-m-Y", strtotime($row["deadline"]))."' >".$date."</p>";}
          echo "<input class='datepicker hidden' type='text' name='fname'>";

        echo "</div>";
      echo "</a>";
      echo "<img src='assets/edit.png' class='img_edit_pencil ' data-projet-id ='".$row['projet_id']."'>";
      echo "<img src='assets/commit.png' class='img_commit_pencil hidden' data-projet-id ='".$row['projet_id']."'>";

      echo "<img src='assets/delete.png' class = 'img_delete_project hidden' data-projet-id ='".$row['projet_id']."''>";
    echo "</li>";

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

if ((isset($_GET['q']) && ($_GET['q'] != null))){
  getProjects($_GET['q']);
}


 ?>
