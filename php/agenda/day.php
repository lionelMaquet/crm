<?php
require '../connection.php' ;
$date = $_GET['d'];




 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="../../css/style.css">
     <link rel="stylesheet" href="../../css/day.css">
   </head>
   <body>

     <img src="../../assets/menu.png" class="hamburger_menu" alt="">

     <div class="wrapper">
       <div class="side_section bg_blue">

         <img src="../../assets/Logo_Neutral_White.png" id="neutral_logo" alt="">


         <ul class="nav_ul list_style_none white">
           <li> <a href="../../projet.php">Projet </a></li>
           <li>New idée</li>
           <li><a href="../agenda.php">Agenda</a></li>
           <li>Contact</li>
         </ul>

       </div>

       <div class="top-date">
         <p><?php echo $date ;?></p>

       </div>



       <script
       src="https://code.jquery.com/jquery-3.4.1.min.js"
       integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
       crossorigin="anonymous"></script>
       <script src="//code.jquery.com/jquery-1.12.4.js"></script>
       <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       <script src="../../js/ham_menu.js" charset="utf-8"></script>
   </body>
 </html>
