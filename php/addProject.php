<?php
require "redirecturl.php";

session_start();

if (!isset($_SESSION['UserLoggedIn']) || $_SESSION['UserLoggedIn'] == false) {
  header('Location:' . $redirecturlindex);
  die();
}


 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter projet</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/addProject.css">
    <link rel="stylesheet" href="../css/details.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  </head>
  <body>

    <img src="../assets/menu.png" class="hamburger_menu" alt="">

    <div class="wrapper">
      <div class="side_section bg_blue">

        <img src="../assets/Logo_Neutral_White.png" id="neutral_logo" alt="">


        <ul class="nav_ul list_style_none white">
          <li> <a href="../projet.php">Projet </a></li>
          <li>New idée</li>
          <li><a href="agenda.php">Agenda</a></li>
          <li>Contact</li>
        </ul>

      </div>

      <div class="project_section">

        <div class="header">
          <h1 class="blue">Nouveau projet</h1>

          <div class="users">
            <button  id="selectUserGNewProject" >G</button>
            <button  id="selectUserJNewProject" >J</button>
            <button  id="selectUserLNewProject" >L</button>
          </div>

        </div>

        <form  action="dataToMySql.php" method="post" class="addProjectForm" id="addProjectForm">

          <input type="hidden" name="userG" value="non" class="userGHidden" />
          <input type="hidden" name="userJ" value="non" class="userJHidden" />
          <input type="hidden" name="userL" value="non" class="userLHidden" />

          <div class="row rowOne">
            <input type="text" name="projectTitle" placeholder="Titre du projet" class="addProjectTitle">
            <input type="text" id="datepicker" name="projectDate" class="addProjectDeadline" placeholder="Deadline" />
          </div>

          <div class="row rowTwo">
            <textarea  name="briefing" placeholder="Briefing" class="addProjectBriefing"></textarea>
          </div>

          <div class="row rowThree">
            <textarea  name="remarques" placeholder="Remarques" value="" class="addProjectRemarques"></textarea>
          </div>
          <button type="submit" name="submit" class="submit" >Valider</button>

        </form>

      </div>

    </div>

    <script src="../js/ham_menu.js" charset="utf-8"></script>
    <script src="../js/addProject.js" charset="utf-8"></script>
  </body>
</html>
