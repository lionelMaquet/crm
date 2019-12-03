<?php

require 'todo.php';


?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Neutral CRM - To do</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <div class="wrapper">

      <div class="table">

        <div class="col">
          <div class="row name">
            <h1 class="h1_name">GUL</h1>
          </div>

          <div class="row inprogress">
            <p class="p_inprogress"><?php getTodoInfo("gul","encours"); ?></p>
          </div>
          <div class="row incoming_and_done">
            <div class="incoming">

            </div>
            <div class="done">

            </div>

          </div>

        </div>


        <div class="col">
          <div class="row name">
            <h1 class="h1_name">JU</h1>
          </div>

          <div class="row inprogress">
            <p class="p_inprogress"><?php getTodoInfo("ju","encours"); ?></p>
          </div>
          <div class="row incoming_and_done">
            <div class="incoming">

            </div>
            <div class="done">

            </div>

          </div>

        </div>


        <div class="col">
          <div class="row name">
            <h1 class="h1_name">LIO</h1>
          </div>

          <div class="row inprogress">
            <p class="p_inprogress"><?php getTodoInfo("lio","encours"); ?></p>
          </div>
          <div class="row incoming_and_done">
            <div class="incoming">

            </div>
            <div class="done">

            </div>

          </div>

        </div>


      </div>


      <a href="todo_new_entry.php">Créer une nouvelle entrée</a>



    </div>

  </body>
</html>
