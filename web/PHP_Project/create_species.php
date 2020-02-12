<!DOCTYPE html>
<html>
<head>

    <title>Week 2 Team Assignment</title>
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

  <div class = "left">
  <form>
    Specie Name: <input type="text" id="specie_name"><br><br>
    Specie Def : <br> 
    <textarea id="specie_def" rows="4" cols="50">
    </textarea><br>

    What genus is the specie from?<br>

    <select id="genus">
    <?php
      $scr = $db->prepare("SELECT genus_id, genus_name
                            FROM animal_genus
                            ORDER BY genus_name ASC");
      
      $scr->execute();
      while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
      {
        $g_id = $frow["genus_id"];
        $g_name = $frow["genus_name"];

        echo "<option value='$g_id'>$g_name</option>";
        echo "Through the looop at least once";
      }

    ?>
    </select>

    
  </form>
  </div>

</body>


</html>