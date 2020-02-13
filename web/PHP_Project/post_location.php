<?php
   require("dbConnect.php");
   $db = get_db();

    $name = $_POST["location_name"];
    $def = $_POST["location_def"];
    $c_id = 1;

    //Filter
    $name = htmlspecialchars($name);
    $def = htmlspecialchars($def);

    $query = "INSERT INTO locations (creator_id, location_name, location_def) VALUES($c_id, :name, :def)";
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name); //This will help keep statements safe
	$statement->bindValue(':def', $def);

    $statement->execute();
    
    header('Location: create_location.php');
?>