<?php
// https://zellwk.com/blog/calendar-with-css-grid/
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Agenda</title>
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/agenda.css">
   </head>
   <body>

     <img src="../assets/menu.png" class="hamburger_menu" alt="">

     <div class="wrapper">
       <div class="side_section bg_blue">

         <img src="../assets/Logo_Neutral_White.png" id="neutral_logo" alt="">


         <ul class="nav_ul list_style_none white">
           <li> <a href="../projet.php">Projet </a></li>
           <li>New idée</li>
           <li>Agenda</li>
           <li>Contact</li>
         </ul>

       </div>

       <div class="calendar">
         <div class="calendar-wrap">
           <div class="month-year-section">
             <button type="button" class="previous-month" name="button"><</button>
             <div class="month-indicator"></div>
             <div class="year-indicator"></div>
             <button type="button" class="next-month" name="button">></button>

           </div>

          <div class="day-of-week">
            <div>L</div>
            <div>M</div>
            <div>M</div>
            <div>J</div>
            <div>V</div>
            <div>S</div>
            <div>D</div>
          </div>

          <div class="date-grid">

          </div>
         </div>

      </div>

      <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
      <script src="//code.jquery.com/jquery-1.12.4.js"></script>
      <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="../js/agenda.js" charset="utf-8"></script>
      <script src="../js/ham_menu.js" charset="utf-8"></script>
   </body>
 </html>
