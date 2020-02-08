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
            
    // Display result 
    echo "$params['type']";
    echo "$params['id']";

    // if($type == 'animal')
    // {
    //     $scr = $db->prepare("SELECT specie_name FROM animal_species WHERE specie_id = $id");
    //     $scr->execute();

    //     while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
    //     {
    //       $s_name = $frow["specie_name"];
            
    //       echo "<p>$s_name</p>";
          
    //     }
      
    // }
    // else if($type == 'habitat')
    // {
    //     $scr = $db->prepare("SELECT habitat_name FROM habitats WHERE habitat_id = $id");
    //     $scr->execute();

    //     while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
    //     {
    //       $s_name = $frow["specie_name"];
            
    //       echo "<p>$s_name</p>";
          
    //     }

    // }
    // else if($type == 'location')
    // {
    //     $scr = $db->prepare("SELECT location_name FROM locations WHERE location_id = $id");
    //     $scr->execute();

    //     while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
    //     {
    //       $s_name = $frow["specie_name"];
            
    //       echo "<p>$s_name</p>";
          
    //     }

    // }
    // else
    // {
    //     echo "We're very sorry, but it seems something went wrong with grabbing the details."
    // }

  ?>




</body>


</html>