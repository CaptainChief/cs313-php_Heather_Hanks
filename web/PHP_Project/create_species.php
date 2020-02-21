<?php
   session_start();
   require "dbConnect.php";
   $db = get_db();
   $user_id = $_SESSION['userID'];
?>

<!DOCTYPE html>
<html>
<head>

    <title>PHP Project Create Species</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<body>

<div class="headerLogo center"></div>

  <ul>
    <li><a href="main_page.php">Home Page</a></li>
    <li><a href="create_habitat.php">Create Habitat</a></li>
    <li><a href="create_location.php">Create Location</a></li>
    <li><a class="active" href="">Create Species</a></li>
    <li><a href="create_genus.php">Create Genus</a></li>
  </ul>

  <br><br>
  <div class = "create">
  <form action="post_species.php" method="post">

    Specie Name: <input type="text" id="specie_name" name="specie_name"><br><br>
    Specie Definition: <br> 
    <textarea id="specie_def" name="specie_def" rows="4" cols="50"></textarea><br><br>

    <p class = "center">Choose a Genus</p>

    <select id="genus" name="genus">
    <?php
      $scr = $db->prepare("SELECT genus_id, genus_name
                            FROM animal_genus
                            WHERE creator_id = $user_id
                            ORDER BY genus_name ASC");
      
      $scr->execute();
      while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
      {
        $g_id = $frow["genus_id"];
        $g_name = $frow["genus_name"];

        echo "<option name='genus_name' value='$g_id'>$g_name</option>";
      }

    ?> 
    </select><br><br><br>

    <p class = "center">Choose Locations:</p>

    <?php
      $scr = $db->prepare("SELECT location_id, location_name
                            FROM locations
                            WHERE creator_id = $user_id
                            ORDER BY location_name ASC");
      
      $scr->execute();
      while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
      {
        $g_id = $frow["location_id"];
        $g_name = $frow["location_name"];

        echo "<input type='checkbox' name='locations[]' value='$g_id'>$g_name<br>";
      }

    ?> <br><br>

    <p class = "center">Choose Habitats: </p>

    <?php
      $scr = $db->prepare("SELECT habitat_id, habitat_name
                            FROM habitats
                            WHERE creator_id = $user_id
                            ORDER BY habitat_name ASC");
      
      $scr->execute();
      while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
      {
        $g_id = $frow["habitat_id"];
        $g_name = $frow["habitat_name"];

        echo "<input type='checkbox' name='habitats[]' value='$g_id'>$g_name<br>";
      }

    ?> <br><br>

      <button type="submit" value="Create Animal">Create Animal</button><br><br>
    
  </form>
  </div>

</body>


</html>