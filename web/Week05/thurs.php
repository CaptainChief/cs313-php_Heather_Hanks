<?php 
    require "dbConnect.php";
    $db = get_db();

    echo "<h1>These are the events</h1><br><hr>";

    $scr = $db->prepare("SELECT name, image FROM w5_EVENT");
    $scr->execute();
    $i = 1;
    while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
    {
      $h_name = $frow["name"];
      $image = $frow["image"];
         
      echo "<p>$i. $h_name   <img src='$image'></p>";
      $i++;
    }
?>