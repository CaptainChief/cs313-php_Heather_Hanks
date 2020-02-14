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
    require "dbConnect.php";
    $db = get_db();

    $url = $_SERVER['REQUEST_URI'];
            $url_components = parse_url($url); 
            
            // Use parse_str() function to parse the 
            // string passed via URL 
            parse_str($url_components['query'], $params); 
            $type = "none";
            $id = "none";
            $og_name = "none";
            $og_locations = array();
            $og_habitats = array();
            
            // Display result 
            $id = (int)$params['id'];
            $type = $params['type'];
            $og_name = $params['g_name'];
            $og_locations = $params['locations'];
            $og_habitats = $params['habitats'];

            $scr = $db->prepare("SELECT a.specie_def, a.specie_name
                                    FROM animal_species a 
                                    WHERE a.specie_id = $id");

            $scr->execute();

            while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
            {
                $s_name = $frow["specie_name"];
                $sdef = $frow["specie_def"];

                echo "Specie Name: <input type=\"text\" id=\"specie_name\" name=\"specie_name\" value=\"$s_name\"><br><br>";
                echo "Specie Definition: <br><textarea id=\"specie_def\" name=\"specie_def\" rows=\"4\" cols=\"50\">$sdef</textarea><br><br>";
                echo "<input type='text' id='s_id' name='s_id' value='$id' hidden>";
                
            }

            echo '<br><br><p class = "center">Choose a Genus</p>';
            echo '<select id="genus" name="genus">';
            
            $scr = $db->prepare("SELECT genus_id, genus_name
                                FROM animal_genus
                                ORDER BY genus_name ASC");
            
            $scr->execute();
            while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
            {
                $g_id = $frow["genus_id"];
                $g_name = $frow["genus_name"];

                if($og_name == $g_name)
                {
                    echo "<option name='genus_name' value='$g_id' selected>$g_name</option>";
                }
                else
                {
                    echo "<option name='genus_name' value='$g_id'>$g_name</option>";
                }
            }
            echo '</select><br><br><br>';

            echo '<br><br><p class = "center">Choose Locations:</p>';
            $scr = $db->prepare("SELECT location_id, location_name
                                FROM locations
                                ORDER BY location_name ASC");
      
            $scr->execute();
            while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
            {

                $g_id = $frow["location_id"];
                $g_name = $frow["location_name"];

                foreach($og_locations as $loc)
                {
                    echo "<input type='checkbox' name='locations[]' value='$g_id' checked>$loc<br>";
                    if($loc == $g_name)
                    {
                        echo "<input type='checkbox' name='locations[]' value='$g_id' checked>$g_name<br>";
                        $g_name = 'skip';
                    }
                }

                if($g_name != 'skip')
                {
                    echo "<input type='checkbox' name='locations[]' value='$g_id'>$g_name<br>";
                }
            }


            echo '<br><br><p class = "center">Choose Habitats: </p>';
            $scr = $db->prepare("SELECT habitat_id, habitat_name
                                FROM habitats
                                ORDER BY habitat_name ASC");

            $scr->execute();
            while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
            {
                $g_id = $frow["habitat_id"];
                $g_name = $frow["habitat_name"];

            echo "<input type='checkbox' name='habitats[]' value='$g_id'>$g_name<br>";
            }

            echo "<br><br><button type='submit'>Complete Update</button><br><br>";

    ?>
    
  </form>

</body>


</html>