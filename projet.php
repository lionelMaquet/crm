<?php include "php/getprojects.php";
      include "config.php";

 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Projets</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
  </head>

  <body>

    <div class="wrapper">
      <div class="side_section bg_blue">

        <img src="assets/Neutral_waiting.png" id="neutral_logo" alt="">

        <ul class="nav_ul list_style_none white">
          <li><a href="projet.php">Projet</a></li>
          <li>New idée</li>
          <li>Agenda</li>
          <li>Contact</li>
        </ul>

      </div>

      <div class="project_section">

        <div class="header">
          <h1 class="blue" id="title">Projets</h1>
        </div>

        <div class="statuts">
          <ul class="list_style_none">
            <button type="button" name="button" value="avenir" onclick="setStatut('avenir') ; getProjects()" class="button_statut  avenir">A venir</button>
            <button type="button" name="button" value="encours" onclick="setStatut('encours') ; getProjects()" class="button_statut selected encours">En cours</button>
            <button type="button" name="button" value="termine" onclick="setStatut('termine') ; getProjects()" class="button_statut termine">Terminé</button>
          </ul>
        </div>

        <div class="list_of_projects">
          <ul id="ul_list_of_projects">
            <!-- complété par la fonction js getProjects() -->
          </ul>
        </div>

        <a href="php/addProject.php">
           <img src="assets/addButton.png" class="addProject"  alt="">
        </a>

        <div class="users">
          <button  id="selectUserG" href="projet.php?user=G" onclick="setUser('gilles') ; getProjects('avenir') " >G</button>
          <button  id="selectUserJ" href="projet.php?user=J" onclick="setUser('julien') ; getProjects('avenir') ">J</button>
          <button  id="selectUserL" href="projet.php?user=L" onclick="setUser('lionel') ; getProjects('avenir') ">L</button>
        </div>

      </div>

    </div>

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="projet.js">

    </script>
  </body>
</html>
