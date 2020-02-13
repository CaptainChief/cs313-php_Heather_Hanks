<?php
   require("dbConnect.php");
   $db = get_db();

    $name = $_POST["location_name"];
    $def = $_POST["location_def"];

    //Filter
    $name = htmlspecialchars($name);
    $def = htmlspecialchars($def);

    $query = "INSERT INTO locations (location_name, location_def) VALUES(:name, :def)";
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name); //This will help keep statements safe
	$statement->bindValue(':def', $def);

    $statement->execute();
    
    // header('Location: create_location.php');
?>