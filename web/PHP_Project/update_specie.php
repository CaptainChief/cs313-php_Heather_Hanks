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
            echo "<button type='submit'>Complete Update</button><br><br>";
            
        }

?>