<?php
   require "dbConnect.php";
   $db = get_db();
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TA05</title>
</head>

<body>

   <form action="data.php" method="post">
      <select name="Scripture">
         <option value="John">John</option>
         <option value="D&C">D&C</option>
         <option value="Mosiah">Mosiah</option>
      </select>

      <input type = "submit" value = "Search">
   </form>
<hr>

<?php
   if (isset($_POST['Scripture'])) 
   {
      $book_name = $_POST['Scripture'];
      $scr = $db->prepare("SELECT * FROM scriptures WHERE book = '$book_name'");
      $scr->execute();

      echo "<h1> <b>SCRIPTURE RESOURCES</b> </h1>";
      while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
      {
        $id = $frow["id"];
        $book = $frow["book"];
        $chapter = $frow["chapter"];
        $verse = $frow["verse"];
        //$content = $frow["content"];
         
        echo "<form action='details.php' method='post'> <input type='submit' name='$id' value='$book $chapter:$verse'></form><br>";
      }
   }
?>

</body>
</html>