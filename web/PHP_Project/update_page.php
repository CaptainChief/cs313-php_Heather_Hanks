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

        if(type == 'specie')
        {
            $scr = $db->prepare("SELECT a.specie_def, a.specie_name
            FROM animal_species a 
            WHERE a.specie_id = $id");

            while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
            {
                $s_name = $frow["specie_name"];
                $sdef = $frow["specie_def"];

                echo "Specie Name: <input type=\"text\" id=\"specie_name\" name=\"specie_name\" value=\"$s_name\"><br><br>";
                echo "Specie Definition: <br><textarea id=\"specie_def\" name=\"specie_def\" rows=\"4\" cols=\"50\">$sdef</textarea><br><br>";
            }
            
        }
        if(type == 'genus')
        {
            $scr = $db->prepare("SELECT g.specie_def, g.specie_name
                                 FROM animal_genus g 
                                 WHERE g.genus_id = $id");

            while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
            {
                $g_name = $frow["genus_name"];
                $gdef = $frow["genus_def"];

                echo "Genus Name: <input type=\"text\" id=\"genus_name\" name=\"genus_name\" value=\"$g_name\"><br><br>";
                echo "Genus Definition: <br><textarea id=\"genus_def\" name=\"genus_def\" rows=\"4\" cols=\"50\">$sdef</textarea><br><br>";
            }
            
        }
        if(type == 'habitat')
        {
            $scr = $db->prepare("SELECT h.habitat_def, h.habitat_name
            FROM habitats h 
            WHERE h.habitat_id = $id");

            while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
            {
                $s_name = $frow["habitat_name"];
                $sdef = $frow["habitat_def"];

                echo "Habitat Name: <input type=\"text\" id=\"habitat_name\" name=\"habitat_name\" value=\"$s_name\"><br><br>";
                echo "Habitat Definition: <br><textarea id=\"habitat_def\" name=\"habitat_def\" rows=\"4\" cols=\"50\">$sdef</textarea><br><br>";
            }
            
        }
        if(type == 'location')
        {
            $scr = $db->prepare("SELECT l.location_def, l.location_name
                                 FROM locations l
                                 WHERE l.location_id = $id");

            while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
            {
                $s_name = $frow["location_name"];
                $sdef = $frow["location_def"];

                echo "Location Name: <input type=\"text\" id=\"location_name\" name=\"location_name\" value=\"$s_name\"><br><br>";
                echo "Location Definition: <br><textarea id=\"location_def\" name=\"location_def\" rows=\"4\" cols=\"50\">$sdef</textarea><br><br>";
            }
            
        }
        else
        {
            echo "Could not get the update page up and running.";
        }
        // $scr = $db->prepare("SELECT a.specie_def, a.specie_name
        //                     FROM animal_species a 
        //                     WHERE a.specie_id = $id");

        // $scr->execute();
        // echo" Habitat Name: <input type=\"text\" id=\"habitat_name\" name=\"habitat_name\"><br><br>
        //       Habitat Definition: <br> 
        //       <textarea id=\"habitat_def\" name=\"habitat_def\" rows=\"4\" cols=\"50\">
        //       </textarea><br><br>


        //       <button type=\"submit\" value=\"Create Habitat\">Create Habitat</button><br><br>
        //       </form>
        //       </div>";

  ?>

</body>


</html>