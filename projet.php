<?php

require "php/redirecturl.php";

session_start();
if (!isset($_SESSION['UserLoggedIn']) || $_SESSION['UserLoggedIn'] == false) {
  header('Location:' . $redirecturlindex);
  die();
}

include "php/getprojects.php";
include "config.php";

 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">


  </head>

  <body>

    <img src="assets/menu.png" class="hamburger_menu" alt="">

    <div class="wrapper">
      <div class="side_section bg_blue">

        <img src="assets/Logo_Neutral_White.png" id="neutral_logo" alt="">

        <ul class="nav_ul list_style_none white">
          <li><a href="projet.php">Projet</a></li>
          <li>New idée</li>
          <li>Agenda</li>
          <li>Contact</li>
        </ul>

      </div>

      <div class="project_section">

        <div class="header">
           <h1 class="blue" id="title">Projets de tous</h1>
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
          <button id="selectUserAll" href="projet.php?user=all" onclick="setUser('all') ; getProjects()">All </button>
          <button  id="selectUserG" href="projet.php?user=G" onclick="setUser('gilles') ; getProjects() " >G</button>
          <button  id="selectUserJ" href="projet.php?user=J" onclick="setUser('julien') ; getProjects() ">J</button>
          <button  id="selectUserL" href="projet.php?user=L" onclick="setUser('lionel') ; getProjects() ">L</button>
        </div>

      </div>

    </div>

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="projet.js"></script>
    <script src="js/editproject.js" charset="utf-8"></script>
    <script src="js/ham_menu.js" charset="utf-8"></script>
  </body>
</html>
