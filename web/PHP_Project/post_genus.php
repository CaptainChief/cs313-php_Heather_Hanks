<?php
   require("dbConnect.php");
   $db = get_db();

    $name = $_POST["genus_name"];
    $def = $_POST["genus_def"];
    $c_id = 1;

    //Filter
    $name = htmlspecialchars($name);
    $def = htmlspecialchars($def);

    $query = "INSERT INTO animal_genus (creator_id, genus_name, genus_def) VALUES($c_id, :name, :def)";
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name); //This will help keep statements safe
	$statement->bindValue(':def', $def);

    $statement->execute();
    
    header('Location: create_genus.php');
?>