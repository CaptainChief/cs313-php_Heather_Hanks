<?php
   session_start();
   require("dbConnect.php");
   $db = get_db();

    $name = $_POST["location_name"];
    $def = $_POST["location_def"];
    // $c_id = $_SESSION['userID'];
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

    $query = "INSERT INTO locations (creator_id, location_name, location_def) VALUES($user_id, :name, :def)";
	$statement = $db->prepare($query);
	$statement->bindValue(':name', $name); //This will help keep statements safe
	$statement->bindValue(':def', $def);

    $statement->execute();
    
    header('Location: create_location.php');
?>