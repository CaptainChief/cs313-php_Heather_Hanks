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

<?php

if (isset($_POST['1'])) 
{

    $scr = $db->prepare("SELECT * FROM scriptures WHERE id = 1");
    $scr->execute();

    while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
      {
         $content = $frow["content"];
         echo "<p>$content</p>";
      }
}
else if (isset($_POST['2'])) 
{

    $scr = $db->prepare("SELECT * FROM scriptures WHERE id = 2");
    $scr->execute();

    while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
      {
         $content = $frow["content"];
         echo "<p>$content</p>";
      }
}
else if (isset($_POST['3'])) 
{

    $scr = $db->prepare("SELECT * FROM scriptures WHERE id = 3");
    $scr->execute();

    while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
      {
         $content = $frow["content"];
         echo "<p>$content</p>";
      }
}
else
{
    echo "How'd you get to this page???";
}

?>

</body>
</html>