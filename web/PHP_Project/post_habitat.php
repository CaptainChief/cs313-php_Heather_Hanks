<?php
    session_start();
   require("dbConnect.php");
   $db = get_db();

    $name = $_POST["habitat_name"];
    $def = $_POST["habitat_def"];
    if(isset($_SESSION['userID']))
    {
     $user_id = $_SESSION['userID'];
    }
    else
    {
      $user_id = 0;
    }

    //Filter
    $name = htmlspecialchars($name);
    $def = htmlspecialchars($def);

    $query = "INSERT INTO habitats (creator_id, habitat_name, habitat_def) VALUES($user_id, :name, :def)";
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name); //This will help keep statements safe
	$statement->bindValue(':def', $def);

    $statement->execute();
    
    header('Location: create_habitat.php');
?>