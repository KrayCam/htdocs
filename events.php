<!-- ==========================
FILE: Blog
OWNER: Ryan Kraynak
email: kraycam@protonmail
phone: (614) 288-1250
UPKEEP: Unfiled
LASTED UPDATED: 6/27/2020
:V.0.0.1
========================= -->
<?php
/*https://www.youtube.com/watch?v=Y0cz_SV0X3Y&t=492s*/
   require "includes/header.php";


function build_calendar($month, $year){
  $daysOfWeek = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thrusday', 'Friday', 'Saturday');

  $firstDayOfMonth = mktime(0,0,0,(int) $month,(int) $year);

  $numDays = date('t'. $firstDayOfMonth);

  $dateComponents = getdate($firstDayOfMonth);

  $monthName = $dateComponents['month'];

  $daysOfWeek = $dateComponents['wday'];

  $dateToday = date('Y-m-d');

  $calendar="<table class='calBorder'>";
  $calendar="<center><h2>$monthName $year</h2></center>";

  $calendar="<tr>";

  foreach($daysOfWeek as $day){
    $calendar="<th class='header'>$day</th>";
  }
  $calendar ="</tr><tr>";

  if($daysOfWeek > 0){
    for ($k=0;$k<$daysOfWeek;$k++){
      $calendar.="<td></td>";
    }
  }
  $currentDay = 1;

  $month = str_pad($month, 2, "0", STR_PAD_LEFT);

 while($currentDay <= $numDays){
    $currentDayRel = str_pad($month, 2, "0", STR_PAD_LEFT);
    $date = "$year-$month-$currentDayRel";

    $calendar.="<td><h4>$currentDay</h4>";

    $calendar."</td>";

    $currentDay++;
    $daysOfWeek++;
}
    if($daysOfWeek != 7){
      $remainingDays = 7-$daysOfWeek;

      for($i=0;$i<$remainingDays;$i++){
        $calendar.="<td></td>";
      }
    }

    $calendar.="</tr>";
    $calendar.="</table>";

    echo $calendar;
  }
/*
<html>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        $dateComponents = getdate();
        $month = $dateComponents['month'];
        $year = $dateComponents['year'];
      echo build_calendar($month, $year);
        ?>
</body>
*/

require "includes/footer.php";
