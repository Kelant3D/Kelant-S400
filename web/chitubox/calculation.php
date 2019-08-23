<?php

  header('Content-Type: text/html; charset=utf-8');

  if(isset($_POST['convert']))
  {

    $time = explode(':', $_POST['chitubox']);
    $chituboxTime = ($time[0]*60) + ($time[1]) + ($time[2]/60);
    $timeTotal = ($_POST['layers']*11/60)+$chituboxTime;

    echo '<span style="color:green;font-size:23px;font-family:Calibri;">Result time: ' . sprintf("%02dh %02dm", floor($timeTotal / 60), ($timeTotal % 60)) . '</span>';


  }

  echo '
  <form method="POST" action="" style="font-family:Calibri;">
    <label>Chitubox time (hours:minutes:seconds)</label>
    <input type="text" name="chitubox" value="" placeholder="HH:mm:ss">
    <label>Total layers</label>
    <input type="text" name="layers" value="">
    <input type="submit" name="convert" value="Get time">
  </form>
  ';


?>
