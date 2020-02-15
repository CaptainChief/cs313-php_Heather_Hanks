<?php
   require "dbConnect.php";
   $db = get_db();

   $name = $_POST["specie_name"]; //specie
   $def = $_POST["specie_def"];   //specie
   $g_id = $_POST["genus"];       //specie
   $s_id = $_POST["s_id"];
   $habitats = $_POST["habitats"]; //specie_habitat
   $locations = $_POST["locations"]; //specie_location

   echo "name=$name<br>";
   echo "def=$def<br>";
   echo "g_id=$g_id<br>";
   echo "s_id=$s_id<br>";
   echo "habitats=$habitats<br>";
   echo "locations=$locations<br>";

    //Filter
    $name = htmlspecialchars($name);
    $def = htmlspecialchars($def);

    // $query =("UPDATE animal_species
    //           SET specie_name = :name, specie_def = :def
    //           WHERE specie_id = $s_id;");
    // $statement = $db->prepare($query);
	// $statement->bindValue(':name', $name); //This will help keep statements safe
	// $statement->bindValue(':def', $def);

    // $statement->execute();

    header('Location: main_page.php');
?>