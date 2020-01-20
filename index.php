<?php

require "php/redirecturl.php";


session_start();
if (isset($_SESSION['UserLoggedIn']) && $_SESSION['UserLoggedIn'] == true){
  header('Location:'.$redirecturlprojet);
  die();
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <title>Login</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

  </head>
  <body>

    <div class="main">
      <img src="assets/n_neutral_white.png" alt="">

      <input type="text" name="username" id="username_input" placeholder="username">
      <input type="password" name="password" id="password_input" placeholder="password">
      <button type="button" id="login_button" name="button">Login</button>



    </div>


    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <script src="js/connexion.js" charset="utf-8"></script>
  </body>
</html>
