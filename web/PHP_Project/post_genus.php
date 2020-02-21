<?php
    session_start();
   require("dbConnect.php");
   $db = get_db();

    $name = $_POST["genus_name"];
    $def = $_POST["genus_def"];
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

    $query = "INSERT INTO animal_genus (creator_id, genus_name, genus_def) VALUES($user_id, :name, :def)";
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name); //This will help keep statements safe
	$statement->bindValue(':def', $def);

    $statement->execute();
    
    header('Location: create_genus.php');
?>