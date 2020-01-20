<?php

session_start();

  if ($_GET['username'] == "neutral" && $_GET['password'] = 'DSGNCREW18!'){
    $_SESSION['UserLoggedIn'] = true;
    echo 'validationOK';
    }

  else {
    echo "problem";
  }


 ?>
