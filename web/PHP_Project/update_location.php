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
   
   // Display result 
   $id = (int)$params['id'];
   $type = $params['type'];

   $scr = $db->prepare("SELECT l.location_def, l.location_name
   FROM locations l
   WHERE l.location_id = $id");

    $scr->execute();

    while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
    {
    $s_name = $frow["location_name"];
    $sdef = $frow["location_def"];

    echo "Location Name: <input type=\"text\" id=\"location_name\" name=\"location_name\" value=\"$s_name\"><br><br>";
    echo "Location Definition: <br><textarea id=\"location_def\" name=\"location_def\" rows=\"4\" cols=\"50\">$sdef</textarea><br><br>";
    echo "<button type='submit'>Complete Update</button><br><br>";
    }

?>