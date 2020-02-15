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

    $query =("UPDATE animal_species
              SET specie_name = :name, specie_def = :def, genus_id = $g_id
              WHERE specie_id = $s_id;");
    $statement = $db->prepare($query);
	$statement->bindValue(':name', $name); //This will help keep statements safe
	$statement->bindValue(':def', $def);

    $statement->execute();

    //Check and add any new habitats
    foreach($habitats as $habitat)
    {
        $scr = $db->prepare("SELECT habitat_id
                            FROM species_and_habitats
                            WHERE habitat_id = $habitat AND specie_id = $s_id");

        $scr->execute();

        $frow = $scr->fetch(PDO::FETCH_ASSOC);
        if(!$frow)
        {
            $query = "INSERT INTO species_and_habitats (specie_id, habitat_id) VALUES($s_id, $habitat)";
            $statement = $db->prepare($query);
            $statement->execute();
        }
    }
    $scr = $db->prepare("SELECT habitat_id
                         FROM species_and_habitats
                         WHERE specie_id = $s_id");

    $scr->execute();

    //Check and remove any habitats the user did not check.
    $delete = 1;

    while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
    {
        $h_id = $frow["habitat_id"];

        foreach($habitats as $habitat)
        {
            if($habitat == $h_id)
            {
                $delete = 0;
                break;
            }
            else
            {
                $delete = 1;
            }
        }
        if($delete)
        {
            $scr1 = $db->prepare("DELETE FROM species_and_habitats
                                  WHERE specie_id = $s_id AND habitat_id = $h_id");
            $scr1->execute();
        }
    }


    //Check and add any new locations
    foreach($locations as $location)
    {
        $scr = $db->prepare("SELECT location_id
                            FROM species_and_location
                            WHERE location_id = $location AND specie_id = $s_id");
    
        $scr->execute();
    
        $frow = $scr->fetch(PDO::FETCH_ASSOC);
        if(!$frow)
        {
            $query = "INSERT INTO species_and_location (specie_id, location_id) VALUES($s_id, $location)";
            $statement = $db->prepare($query);
            $statement->execute();
        }
    }
    $scr = $db->prepare("SELECT location_id
                        FROM species_and_location
                        WHERE specie_id = $s_id");
    
    $scr->execute();
    
    //Check and remove any locations the user did not check.
    $delete = 1;
    
    while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
    {
        $l_id = $frow["location_id"];
    
        foreach($locations as $location)
        {
            if($location == $l_id)
            {
                $delete = 0;
                break;
            }
            else
            {
                $delete = 1;
            }
        }
        if($delete)
        {
            $scr1 = $db->prepare("DELETE FROM species_and_location
                                WHERE specie_id = $s_id AND location_id = $l_id");
            $scr1->execute();
        }
    }

    header('Location: main_page.php');
?>