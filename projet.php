<?php

include "php/getprojects.php";

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

      <h1 id="neutral_logo" class="white">neutral</h1>

      <ul class="nav_ul list_style_none white">
        <li>Projet</li>
        <li>New idée</li>
        <li>Agenda</li>
        <li>Contact</li>
      </ul>

    </div>

    <div class="project_section">
      <div class="header">
        <h1 class="blue">PROJETS</h1>
      </div>
      <div class="statuts">
        <ul class="list_style_none">
          <button type="button" name="button" value="avenir" onclick="getProjects('avenir')" class="button_statut selected">A venir</button>
          <button type="button" name="button" value="encours" onclick="getProjects('encours')" class="button_statut">En cours</button>
          <button type="button" name="button" value="termine" onclick="getProjects('termine')" class="button_statut">Terminé</button>

        </ul>

      </div>


      <div class="list_of_projects">
        <ul id="ul_list_of_projects">
          <!-- complété par la fonction js getProjects() -->

        </ul>


      </div>



    </div>

  </div>

  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="main.js">

  </script>
  </body>
</html>
