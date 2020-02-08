<?php
   require "dbConnect.php";
   $db = get_db();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<body>

<div class="headerLogo center"></div>

<ul>
    <li><a href="main_page.php">Home Page</a></li>
</ul>

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

    if($type == 'animal')
    {
        $scr = $db->prepare("SELECT a.specie_def, a.specie_name, l.location_name, h.habitat_name 
                            FROM animal_species a 
                            JOIN species_and_habitats sh
                            ON a.specie_id = sh.specie_id
                            JOIN habitats h
                            ON h.habitat_id = sh.habitat_id
                            JOIN species_and_location sl
                            ON a.specie_id = sl.specie_id
                            JOIN locations l
                            ON l.location_id = sl.location_id
                            WHERE a.specie_id = $id");

        $scr->execute();

        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {
          $s_name = $frow["specie_name"];
          $l_name = $frow["location_name"];
          $h_name = $frow["habitat_name"];
          $def = $frow["specie_def"];
            
          echo "<p>Name: $s_name</p><br>";
          echo "<p>Location: $l_name</p><br>";
          echo "<p>Habitat: $h_name</p><br>";

          echo "<br>Description: <div>$def</div>";
          
        }
      
    }
    else if($type == 'habitat')
    {
        $scr = $db->prepare("SELECT h.habitat_def, a.specie_name, l.location_name, h.habitat_name 
                            FROM animal_species a 
                            JOIN species_and_habitats sh
                            ON a.specie_id = sh.specie_id
                            JOIN habitats h
                            ON h.habitat_id = sh.habitat_id
                            JOIN species_and_location sl
                            ON a.specie_id = sl.specie_id
                            JOIN locations l
                            ON l.location_id = sl.location_id
                            WHERE h.habitat_id = $id");

        $scr->execute();

        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {
            $s_name = $frow["specie_name"];
            $l_name = $frow["location_name"];
            $h_name = $frow["habitat_name"];
            $def = $frow["habitat_def"];
              
            echo "<p>Habitat: $h_name</p><br>";
            echo "<p>Animals: $s_name</p><br>";
            echo "<p>Locations: $l_name</p><br>";
  
            echo "<br>Description: <div>$def</div>";
          
        }

    }
    else if($type == 'location')
    {
        $scr = $db->prepare("SELECT l.location_def, a.specie_name, l.location_name, h.habitat_name 
                            FROM animal_species a 
                            JOIN species_and_habitats sh
                            ON a.specie_id = sh.specie_id
                            JOIN habitats h
                            ON h.habitat_id = sh.habitat_id
                            JOIN species_and_location sl
                            ON a.specie_id = sl.specie_id
                            JOIN locations l
                            ON l.location_id = sl.location_id
                            WHERE l.location_id = $id");
        $scr->execute();

        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {
            $s_name = $frow["specie_name"];
            $l_name = $frow["location_name"];
            $h_name = $frow["habitat_name"];
            $def = $frow["location_def"];
              
            echo "<p>Location: $l_name</p><br>";
            if(is_array($h_name))
            {
                echo "<p>Habitats: <br>";
                for ($i = 0; $i < sizeof($h_name); $i++)
                {
                    echo "    <p>" . $i + 1 . ". " . $h_name[i] . "</p><br>";
                }
            }
            else
            {
                echo "<p>Habitat: $h_name</p><br>";
            }
            if(sizeof($s_name) > 1)
            {
                
            }
            // echo "<p>Habitats: $h_name</p><br>";
            // echo "<p>Animals: $s_name</p><br>";
  
            echo "<br>Description: <div>$def</div>";
          
        }

    }
    else
    {
        echo "We're very sorry, but it seems something went wrong with grabbing the details.";
    }

  ?>




</body>


</html>