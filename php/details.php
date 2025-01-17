<?php

$details_id = $_GET['id']; // Doit être avant details_components

require "redirecturl.php";
require "details_components.php";
require "gettasks.php";
require "../config.php";

session_start();
if (!isset($_SESSION['UserLoggedIn']) || $_SESSION['UserLoggedIn'] == false) {
  header('Location:' .$redirecturlindex);
  die();
}



?>

<script type="text/javascript">
  let projectID = <?php echo $_GET['id'] ?>
</script>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/details.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
  </head>

  <body>
    <img src="../assets/menu.png" class="hamburger_menu" alt="">

    <div class="wrapper">
      <div class="side_section bg_blue">

        <img src="../assets/Logo_Neutral_White.png" id="neutral_logo" alt="">


        <ul class="nav_ul list_style_none white">
          <li><a href="../projet.php">Projet</a></li>
          <li>New idée</li>
          <li><a href="agenda.php">Agenda</a></li>
          <li>Contact</li>
        </ul>

      </div>

      <div class="project_section">

        <div class="header">
          <div class="top">
            <h1 class="blue" id="title"><?php echo $titre ?></h1>
            <p class="projectStatut"><?php echo getStatut(); ?></p>
          </div>
          <div class="bottom">
            <?php echo getUsers(); ?>
            <img src="../assets/addButton.png" id="addUserButton" alt="" />
            <img src="../assets/ok.png" id="validateAddUser" class="hidden" alt="">

          </div>

        </div>

        <div class="main">
          <div class="left">
            <div class="briefing">
              <h2>Briefing</h2>
              <p class="briefingOuRemarqueP briefingP"><?php echo $description ; ?></p>

              <textarea name="name"  rows="8" cols="80" class="briefingOuRemarqueTextarea briefingTextarea textzoneHidden">test 1er janvier</textarea>
              <img src="../assets/addButton.png" class="changeBriefingOuRemarqueButton modifyButton" onclick="allowBriefingAndRemarksChange()" alt="">
              <img src="../assets/ok.png" class="changeBriefingOuRemarqueButton changeStateButtonHidden commitButton" onclick="<?php echo "commitBriefingAndRemarksChange(".$_GET['id'].")" ?>" alt="">

            </div>
            <div class="remarques">
              <h2>Remarques</h2>
              <p class="briefingOuRemarqueP remarqueP"><?php echo $remarque; ?></p>

              <textarea name="name"  rows="8" cols="80" class="briefingOuRemarqueTextarea remarqueTextarea textzoneHidden" >test 1er janvier</textarea>
              <img src="../assets/addButton.png" class="changeBriefingOuRemarqueButton modifyButton" onclick="allowBriefingAndRemarksChange()" alt="">
              <img src="../assets/ok.png" class="changeBriefingOuRemarqueButton changeStateButtonHidden commitButton" onclick="<?php echo "commitBriefingAndRemarksChange(".$_GET['id'].")" ?>"  alt="">

            </div>
          </div>
          <div class="right">
            <div class="taches">
              <h2>Tâches de <em id="nameOfCurrentUserForTasks"> tous </em> </h2>
              <br>
              <ul id="listeTaches">
                <?php echo getTasks('all', $_GET['id']); ?>
              </ul>
            </div>
            <div class="addTaskDiv">
              <textarea class="textareaAddTask" name="name" ></textarea>
              <button type="button" name="button" class="addTaskButton">ADD</button>
            </div>

          </div>

          <div class="buttondiv">
            <button value="<?php echo $statut ?>" type="button" name="button" class="statut_button" onclick="<?php echo "changeStatut(".$_GET['id'].")" ?>">START</button>
          </div>


        </div>


  <!-- A FAIRE POUR AJOUTER UN LIEN VERS LES PROJETS D'UN UTILISATEUR DEPUIS LA PAGE DE DETAILS
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
    <script type="text/javascript" src="../js/details.js"></script>
    <script src="../js/tasks.js" charset="utf-8"></script>
    <script src="../js/ham_menu.js" charset="utf-8"></script>





  </body>
</html>
