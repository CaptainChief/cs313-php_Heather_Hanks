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
    $id = $params['id'];
    $type = $params['type'];

    if($type == 'animal')
    {
        $scr = $db->prepare("SELECT a.specie_name, l.location_name, h.habitat_name 
                            FROM animal_species a 
                            JOIN species_and_habitats sh
                            ON a.specie_id = sh.specie_id
                            JOIN habitats h
                            ON h.habitat_id = sh.habitat_id
                            JOIN species_and_location sl
                            ON a.specie_id = sl.specie_id
                            JOIN locations l
                            ON l.location_id = sl.location_id
                            WHERE a.specie_id = $id";
        $scr->execute();
        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {
            echo "fetching";
          $s_name = $frow["a.specie_name"];
          $l_name = $frow["l.location_name"];
          $h_name = $frow["h.habitat_name"];
            
          echo "<p>Name: $s_name</p>";
          echo "<p>Location: $l_name</p>";
          echo "<p>Habitat: $h_name</p>";
          
        }
      
    }
    else if($type == 'habitat')
    {
        $scr = $db->prepare("SELECT habitat_name FROM habitats WHERE habitat_id = $id");
        $scr->execute();

        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {
          $s_name = $frow["habitat_name"];
            
          echo "<p>$s_name</p>";
          
        }

    }
    else if($type == 'location')
    {
        $scr = $db->prepare("SELECT location_name FROM locations WHERE location_id = $id");
        $scr->execute();

        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {
          $s_name = $frow["location_name"];
            
          echo "<p>$s_name</p>";
          
        }

    }
    else
    {
        echo "We're very sorry, but it seems something went wrong with grabbing the details.";
    }

  ?>




</body>


</html>