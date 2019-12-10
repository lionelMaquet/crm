
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ajouter projet</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/addProject.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
        <h1 class="blue">Nouveau projet</h1>
      </div>

      <form  action="index.html" method="post" class="addProjectForm">

        <div class="row rowOne">
          <input type="text" name="projectTitle" placeholder="Titre du projet" class="addProjectTitle">
          <input type="text" id="datepicker" class="addProjectDeadline" placeholder="Deadline" />
        </div>

        <div class="row rowTwo">
          <textarea  name="briefing" placeholder="Briefing" class="addProjectBriefing"></textarea>
        </div>

        <div class="row rowThree">
          <textarea  name="remarques" placeholder="Remarques" value="" class="addProjectRemarques"></textarea>
        </div>

        <button type="submit" name="button" class="submit">Valider</button>

      </form>




    </div>

  </div>






  <script src="../js/addProject.js" charset="utf-8"></script>
  </body>
</html>
