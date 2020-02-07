<?php
   require "dbConnect.php";
   $db = get_db();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Week 2 Team Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<script>
    function openView(evt, section) 
    {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) 
        {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) 
        {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(section).style.display = "block";
        evt.currentTarget.className += " active";
    }

    function details()
    {
      alert("Incoming page!");
    }

</script>

<body>

  <div class="headerLogo center"></div>

  <ul>
    <li><a class="active" href="">Home Page</a></li>
    <li><a href="create_habitat.php">Create Habitat</a></li>
    <li><a href="create_location.php">Create Location</a></li>
    <li><a href="create_species.php">Create Species</a></li>
    <li><a href="create_genus.php">Create Genus</a></li>
  </ul>

  <div class="tab center">
  <button class="tablinks" onclick="openView(event, 'Animals')">Animals</button>
  <button class="tablinks" onclick="openView(event, 'Habitats')">Habitats</button>
  <button class="tablinks" onclick="openView(event, 'Locations')">Locations</button>
</div>

<!-- Tab content -->
<div id="Animals" class="tabcontent center">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Animals</h3>
  <div class = "inner-left left">
    <?php
      $scr = $db->prepare("SELECT specie_id, specie_name FROM animal_species");
      $scr->execute();
      $i = 1;
      while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
      {
        $s_name = $frow["specie_name"];
        $id = $frow["specie_id"];
          
        echo "<p><button type='button' onclick=\"details()\">$s_name</button></p>";
        $i++;
      }
    ?>
  </div>
</div>

<div id="Habitats" class="tabcontent center">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Habitats</h3>
  <div class = "inner-left left">
    <?php
      $scr = $db->prepare("SELECT habitat_name FROM habitats");
      $scr->execute();
      $i = 1;
      while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
      {
        $h_name = $frow["habitat_name"];
          
        echo "<p><button type='button'>$h_name</button></p>";
        $i++;
      }
    ?>
  </div>
</div>

<div id="Locations" class="tabcontent center">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <h3>Locations</h3>
  <div class = "inner-left left">
    <?php
      $scr = $db->prepare("SELECT location_name FROM locations");
      $scr->execute();
      $i = 1;
      while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
      {
        $l_name = $frow["location_name"];
          
        echo "<p><button type='button'>$l_name</button></p>";
        $i++;
      }
    ?>
  </div>
</div>



</body>
</html>