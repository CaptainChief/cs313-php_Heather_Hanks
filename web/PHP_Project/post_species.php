<?php
   require("dbConnect.php");
   $db = get_db();

    $name = $_POST["specie_name"]; //specie
    $def = $_POST["specie_def"];   //specie
    $g_id = $_POST["genus"];       //specie
    $habitats = $_POST["habitats"]; //specie_habitat
    $locations = $_POST["locations"]; //specie_location
    $c_id = = $_SESSION['userID'];

    //Filter
    $name = htmlspecialchars($name);
    $def = htmlspecialchars($def);

    $query = "INSERT INTO animal_species (creator_id, specie_name, genus_id, specie_def) VALUES($c_id, :name, $g_id, :def)";
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name); //This will help keep statements safe
	$statement->bindValue(':def', $def);
    $statement->execute();

    $specieId = $db->lastInsertId("animal_species_specie_id_seq"); //It's calling the sequence for animal_species table.

    foreach ($habitats as $habitat)
    {
        $query = "INSERT INTO species_and_habitats (specie_id, habitat_id) VALUES($specieId, $habitat)";
        $statement = $db->prepare($query);
        $statement->execute();
    }
    
    foreach ($locations as $location)
    {
        $query = "INSERT INTO species_and_location (specie_id, location_id) VALUES($specieId, $location)";
        $statement = $db->prepare($query);
        $statement->execute();
    }
    
    header('Location: create_species.php');
?>
