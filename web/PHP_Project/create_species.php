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

  <div class = "center">
  <form>
    Specie Name: <input type="text" id="specie_name">
    Specie Def : <br> 
    <textarea id="specie_def" rows="4" cols="50">
    </textarea>

    <label for="genus">What genus is the specie from?</label>
    <select id="genus">
    <?php
      $scr1 = $db->prepare("SELECT g.genus_id, g.genus_name
                            FROM animal_genus g");
      
      $scr1->execute();
      while ($frow = $scr1->fetch(PDO::FETCH_ASSOC))
      {
        $g_id = $frow["genus_id"];
        $g_name = $frow["genus_name"];

        echo "<option value='$g_id'>$g_name</option>";
      }

    ?>
    </select>

    
  </form>
  </div>

</body>


</html>