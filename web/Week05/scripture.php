<?php 
   require "dbConnect.php";
   $db = get_db();

   $scr = $db->prepare("SELECT * FROM scriptures");
   $scr->execute();

   echo "<h1> <b>SCRIPTURE RESOURCES</b> </h1>";
   while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
   {
      $book = $frow["book"];
      $chapter = $frow["chapter"];
      $verse = $frow["verse"];
      $content = $frow["content"];
      echo "<p><b>$book $chapter:$verse</b> - \"$content\"</p><br>";
   }
?>
