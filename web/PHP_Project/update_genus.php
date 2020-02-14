<?php
   require "dbConnect.php";
   $db = get_db();
?>

<!DOCTYPE html>
<html>
<head>

    <title>PHP Project Create Habitat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<body>

<div class="headerLogo center"></div>

  <ul>
    <li><a href="main_page.php">Cancel Update</a></li>
  </ul>

  <br><br>
  <div class = "create">
  <form action="post_update.php" method="post">

    <?php
        $url = $_SERVER['REQUEST_URI'];
        $url_components = parse_url($url); 
        
        // Use parse_str() function to parse the 
        // string passed via URL 
        parse_str($url_components['query'], $params); 
        $type = "none";
        $id = "none";
        
        // Display result 
        $id = (int)$params['id'];
        $type = $params['type'];


        $scr = $db->prepare("SELECT g.specie_def, g.specie_name
                            FROM animal_genus g 
                            WHERE g.genus_id = $id");

        $scr->execute();

        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {
            $g_name = $frow["genus_name"];
            $gdef = $frow["genus_def"];

            echo "Genus Name: <input type=\"text\" id=\"genus_name\" name=\"genus_name\" value=\"$g_name\"><br><br>";
            echo "Genus Definition: <br><textarea id=\"genus_def\" name=\"genus_def\" rows=\"4\" cols=\"50\">$sdef</textarea><br><br>";
            echo "<p name='g_id' value='$id' hidden></p>";
            echo "<button type='submit'>Complete Update</button><br><br>";           
        }

  ?>

  </form>

</body>


</html>