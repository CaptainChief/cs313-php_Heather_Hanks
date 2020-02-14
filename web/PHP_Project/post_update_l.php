<?php
   require "dbConnect.php";
   $db = get_db();

   $name = $_POST["location_name"]; //specie
   $def = $_POST["location_def"];   //specie
   $l_id = $_POST["l_id"];       //specie

    //Filter
    $name = htmlspecialchars($name);
    $def = htmlspecialchars($def);

    $query =("UPDATE locations
              SET location_name = :name, location_def = :def
              WHERE location_id = $l_id;");
    $statement = $db->prepare($query);
	$statement->bindValue(':name', $name); //This will help keep statements safe
	$statement->bindValue(':def', $def);

    $statement->execute();

    header('Location: main_page.php');
?>