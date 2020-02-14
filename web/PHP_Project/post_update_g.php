<?php
   require "dbConnect.php";
   $db = get_db();

   $name = $_POST["genus_name"]; //specie
   $def = $_POST["genus_def"];   //specie
   $g_id = $_POST["g_id"];       //specie

    //Filter
    $name = htmlspecialchars($name);
    $def = htmlspecialchars($def);

    $query =("UPDATE animal_genus
              SET genus_name = :name, genus_def = :def
              WHERE genus_id = $g_id;");
    $statement = $db->prepare($query);
	$statement->bindValue(':name', $name); //This will help keep statements safe
	$statement->bindValue(':def', $def);

    // $scr->execute();
?>