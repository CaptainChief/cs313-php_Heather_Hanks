<?php
   require "dbConnect.php";
   $db = get_db();

   $name = $_POST["habitat_name"]; //specie
   $def = $_POST["habitat_def"];   //specie
   $g_id = $_POST["h_id"];       //specie

    //Filter
    $name = htmlspecialchars($name);
    $def = htmlspecialchars($def);

    $query =("UPDATE habitats
              SET habitat_name = :name, habitat_def = :def
              WHERE habitat_id = $g_id;");
    $statement = $db->prepare($query);
	$statement->bindValue(':name', $name); //This will help keep statements safe
	$statement->bindValue(':def', $def);

    $statement->execute();

    header('Location: main_page.php');
?>