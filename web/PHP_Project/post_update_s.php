<?php
   require "dbConnect.php";
   $db = get_db();

   $name = $_POST["specie_name"]; //specie
   $def = $_POST["specie_def"];   //specie
   $g_id = $_POST["genus"];       //specie
   $s_id = $_POST["s_id"];
   $habitats = $_POST["habitats"]; //specie_habitat
   $locations = $_POST["locations"]; //specie_location

    //Filter
    $name = htmlspecialchars($name);
    $def = htmlspecialchars($def);

    // $query =("UPDATE animal_species
    //           SET specie_name = :name, specie_def = :def, genus_id = $g_id
    //           WHERE specie_id = $s_id;");
    // $statement = $db->prepare($query);
	// $statement->bindValue(':name', $name); //This will help keep statements safe
	// $statement->bindValue(':def', $def);

    // $statement->execute();
    foreach($habitats as $habitat)
    {
        $scr = $db->prepare("SELECT habitat_id
                            FROM species_and_habitats
                            WHERE habitat_id = $habitat");

        $scr->execute();

        $frow = $statement->fetch(PDO::FETCH_ASSOC);
        if(!$frow)
        {
            $query = "INSERT INTO species_and_habitats (specie_id, habitat_id) VALUES($s_id, $habitat)";
            $statement = $db->prepare($query);
            $statement->execute();
        }

    }
    // foreach($locations as $location)
    // {
    //     $scr = $db->prepare("SELECT l.location_id, location_name
    //                         FROM locations
    //                         ORDER BY location_name ASC");
      
    //     $scr->execute();
    //     while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
    //     {

    //         $g_id = $frow["location_id"];
    //         $g_name = $frow["location_name"];
                
    //     }
    // }

    header('Location: main_page.php');
?>