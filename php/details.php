<?php

$_SESSION["details_id"] = $_GET['id'];
require "details_components.php";


?>





<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Projets</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/details.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
  </head>

  <body>


  <div class="wrapper">
    <div class="side_section bg_blue">

      <h1 id="neutral_logo" class="white">neutral</h1>

      <ul class="nav_ul list_style_none white">
        <li><a href="../projet.php">Projet</a></li>
        <li>New idée</li>
        <li>Agenda</li>
        <li>Contact</li>
      </ul>

    </div>

    <div class="project_section">

      <div class="header">
        <div class="top">
          <h1 class="blue" id="title"><?php echo $titre ?></h1>
          <p><?php echo getStatut(); ?></p>
        </div>
        <div class="bottom">
          <?php echo getUsers(); ?>
          <img src="../assets/addButton.png" id="addUserButton" alt="" />
          <img src="../assets/ok.png" id="validateAddUser" class="hidden" alt="">

        </div>

      </div>


<!--
      <div class="users">
        <button  id="selectUserG" href="projet.php?user=G" onclick="setUser('gilles') ; getProjects('avenir') ; resetStatutHighlight()" >G</button>
        <button  id="selectUserJ" href="projet.php?user=J" onclick="setUser('julien') ; getProjects('avenir') ; resetStatutHighlight()">J</button>
        <button  id="selectUserL" href="projet.php?user=L" onclick="setUser('lionel') ; getProjects('avenir') ; resetStatutHighlight()">L</button>
      </div>
-->


    </div>

  </div>

  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="../js/details.js">

  </script>
  </body>
</html>
