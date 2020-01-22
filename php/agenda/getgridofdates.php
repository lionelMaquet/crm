<?php

$year = $_GET['y'];
$month = $_GET['m'];
$numberOfDays = $_GET['n'];
$dayOfWeekFirstDay = $_GET['f'];

$today = date("Y/m/d");



for ($i = 1; $i <= $numberOfDays ; $i++) {

  $day = $i;
  if ($day < 10){
    $day = sprintf("%02d", $day);
  }

  if ($month < 10) {
    $month = sprintf("%02d", $month);
  }
  $currentDate = $year."/".$month."/".$day;


  if ($currentDate == $today) {
    echo "<button ><time class='today' datetime='$year-$month-$i'>".$i."</time></button>";
  } else {
    echo "<button data-time='$year-$month-$i'><p>".$i."</p></button>";
  }

}







?>
