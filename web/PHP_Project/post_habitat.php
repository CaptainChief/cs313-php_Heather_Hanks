<?php
   require("dbConnect.php");
   $db = get_db();

    $name = $_POST["habitat_name"];
    $def = $_POST["habitat_def"];
    $c_id = = $_SESSION['userID'];

    //Filter
    $name = htmlspecialchars($name);
    $def = htmlspecialchars($def);

    $query = "INSERT INTO habitats (creator_id, habitat_name, habitat_def) VALUES($c_id, :name, :def)";
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name); //This will help keep statements safe
	$statement->bindValue(':def', $def);

    $statement->execute();
    
    header('Location: create_habitat.php');
?>