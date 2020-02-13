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

    if($type == 'genus')
    {
        $query = "";
        $statement = $db->prepare($query);
        $statement->execute();
    }
    else if($type == 'specie')
    {
        $query = "";
        $statement = $db->prepare($query);
        $statement->execute();
    }
    else if($type == 'habitat')
    {
        $query = "";
        $statement = $db->prepare($query);
        $statement->execute();
    }
    else if($type == 'location')
    {
        $query = "SELECT location_id FROM species_and_locations WHERE location_id = $id";
        $statement = $db->prepare($query);
        $statement->execute();

        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {
          $g_id = $frow["location_id"];
  
          echo "$g_id";
        }
    }
    
    // header('Location: create_location.php');
?>