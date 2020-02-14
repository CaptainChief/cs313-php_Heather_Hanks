<?php
   require "dbConnect.php";
   $db = get_db();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<script>
    function details(type, id)
    {
      // alert("Incoming page for " + type);
      // var encodedParam = encodeURIComponent('detail_page.php?type=' + type + '&id=' + id);
      window.location.replace('detail_page.php?type=' + type + '&id=' + id);
    }

    function delete_item(type, id)
    {
      // var encodedParam = encodeURIComponent('delete_page.php?type=' + type + '&id=' + id);
      window.location.replace('delete_page.php?type=' + type + '&id=' + id);
    }

    function update_item(type, id, genus_name, locations, habitats)
    {
      if(type == 'specie')
      {
        var url = "update_specie.php?type=" + type + "&id=" + id + "&g_name=" + genus_name;
        for(var i = 0; i < locations.length; i++)
        {
          alert(locations[i]);
          url +="&locations="+locations[i];
        }
        for(var i = 0; i < habitats.length; i++)
        {
          alert(habitats[i]);
          url +="&habitats="+habitats[i];
        }

        window.location.replace(url);
      }
      else if(type == 'genus')
      {
        window.location.replace('update_genus.php?type=' + type + '&id=' + id);
      }
      else if(type == 'location')
      {
        window.location.replace('update_location.php?type=' + type + '&id=' + id);
      }
      else if(type == 'habitat')
      {
        window.location.replace('update_habitat.php?type=' + type + '&id=' + id);
      }
    }
</script>

<body>

<div class="headerLogo center"></div>

<ul>
    <li><a href="main_page.php">Home Page</a></li>
</ul>


<div class = "details left">
<br><br>
  <?php
    $url = $_SERVER['REQUEST_URI'];
    $url_components = parse_url($url); 
    
    // Use parse_str() function to parse the 
    // string passed via URL 
    parse_str($url_components['query'], $params); 
    $type = "none";
    $id = "none";
    
    // Display result 
    $id = (int)$params['id'];
    $type = $params['type'];

    if($type == 'specie')
    {

        $scr = $db->prepare("SELECT a.specie_def, a.specie_name
                            FROM animal_species a 
                            WHERE a.specie_id = $id");

        $scr->execute();

        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {
          $s_name = $frow["specie_name"];
          $def = $frow["specie_def"];

          $scr1 = $db->prepare("SELECT g.genus_def, g.genus_name
          FROM animal_genus g
          JOIN animal_species a
          ON g.genus_id = a.genus_id 
          WHERE a.specie_id = $id");

          $scr1->execute();

          while ($frow = $scr1->fetch(PDO::FETCH_ASSOC))
          {
            $g_name = $frow["genus_name"];
            $gdef = $frow["genus_def"];

            echo "The $s_name is part of the $g_name genus.<br><br>";
            echo "<b>$g_name Description</b>: $gdef<br><br>";
          }
            
          echo "<b>$s_name Description</b>: $def<br><br>";
        }

        $locations = array();
        $scr = $db->prepare("SELECT l.location_id, l.location_name
                            FROM animal_species a 
                            JOIN species_and_location sl
                            ON a.specie_id = sl.specie_id
                            JOIN locations l
                            ON l.location_id = sl.location_id
                            WHERE a.specie_id = $id");

        $scr->execute();

        echo "This animal can be found in these locations: <br>";
        $i = 1;
        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {
          $l_name = $frow["location_name"];
          $l_id = $frow["location_id"];
          array_push($locations, $l_name);
            
          echo "    $i. <button type='button' onclick=\"details('location', '$l_id')\">$l_name</button><br><br>";
          $i++;          
        }

        $habitats = array();
        $scr = $db->prepare("SELECT h.habitat_id, h.habitat_name 
                            FROM animal_species a 
                            JOIN species_and_habitats sh
                            ON a.specie_id = sh.specie_id
                            JOIN habitats h
                            ON h.habitat_id = sh.habitat_id
                            WHERE a.specie_id = $id");

        $scr->execute();

        $i = 1;
        echo "<br>This animal can be found in these habitats: <br>";
        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {
          $h_name = $frow["habitat_name"];
          $h_id = $frow["habitat_id"];
          array_push($habitats, $h_name);

          echo "    $i. <button type='button' onclick=\"details('habitat', '$h_id')\">$h_name</button><br><br>";
          $i++;          
        }

        echo "<br><hr><br>";
        echo "<button type='button' onclick=\"delete_item('specie', '$id')\">Delete Specie</button><br><br>";
        echo "<button type='button' onclick=\"update_item('specie', '$id', '$g_name', $locations, $habitats)\">Update Specie</button><br><br>";
    }
    else if($type == 'genus')
    {
      $scr = $db->prepare("SELECT g.genus_def, g.genus_name 
                          FROM animal_genus g
                          WHERE g.genus_id = $id");

      $scr->execute();

      while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
      {

          $h_name = $frow["genus_name"];
          $def = $frow["genus_def"];
              
          echo "<b>Genus</b>: $h_name<br>";
  
          echo "<br><b>Genus Description</b>: $def<br><br>";
      }

      $scr = $db->prepare("SELECT a.specie_id, a.specie_name
                          FROM animal_species a 
                          WHERE a.genus_id = $id");

      $scr->execute();

      echo "Animals: <br>";
      $i = 1;
      while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
      {

        $h_name = $frow["specie_name"];
        $h_id = $frow["specie_id"];
        echo "    $i. <button type='button' onclick=\"details('specie', '$h_id')\">$h_name</button><br><br>";
        $i++;
      }

      echo "<br><hr><br>";
      echo "<button type='button' onclick=\"delete_item('genus', '$id')\">Delete Genus</button><br><br>";
      echo "<button type='button' onclick=\"update_item('genus', '$id', '', '', '')\">Update Genus</button><br><br>";
    }
    else if($type == 'habitat')
    {
        $scr = $db->prepare("SELECT h.habitat_def, h.habitat_name 
                            FROM habitats h 
                            WHERE h.habitat_id = $id");

        $scr->execute();

        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {

            $h_name = $frow["habitat_name"];
            $def = $frow["habitat_def"];
              
            echo "<b>Habitat</b>: $h_name<br>";
  
            echo "<br><b>Description</b>: $def<br><br>";
        }

        $scr = $db->prepare("SELECT a.specie_id, a.specie_name
                            FROM animal_species a 
                            JOIN species_and_habitats sh
                            ON a.specie_id = sh.specie_id
                            JOIN habitats h
                            ON h.habitat_id = sh.habitat_id
                            WHERE h.habitat_id = $id");

        $scr->execute();

        echo "Animals: <br>";
        $i = 1;
        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {

            $h_name = $frow["specie_name"];
            $h_id = $frow["specie_id"];
            echo "    $i. <button type='button' onclick=\"details('specie', '$h_id')\">$h_name</button><br><br>";
            $i++;
        }

        echo "<br><hr><br>";
        echo "<button type='button' onclick=\"delete_item('habitat', '$id')\">Delete Habitat</button><br><br>";
        echo "<button type='button' onclick=\"update_item('habitat', '$id', '', '', '')\">Update Habitat</button><br><br>";

    }
    else if($type == 'location')
    {
        $scr = $db->prepare("SELECT l.location_def, l.location_name 
                            FROM locations l
                            WHERE l.location_id = $id");
        $scr->execute();

        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {
            $l_name = $frow["location_name"];
            $def = $frow["location_def"];
              
            echo "<b>Location</b>: $l_name<br><br>";
            echo "<b>Description</b>: <br>    $def<br><br>";
          
        }

        $scr = $db->prepare("SELECT a.specie_id, a.specie_name 
                            FROM animal_species a 
                            JOIN species_and_location sl
                            ON a.specie_id = sl.specie_id
                            JOIN locations l
                            ON l.location_id = sl.location_id
                            WHERE l.location_id = $id");
        $scr->execute();

        $i = 1;
        echo "Animals: <br>";
        while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
        {
            $s_name = $frow["specie_name"];
            $s_id = $frow["specie_id"];

            echo "    $i. <button type='button' onclick=\"details('specie', '$s_id')\">$s_name</button><br><br>";
            $i++;
        }

        echo "<br><hr><br>";
        echo "<button type='button' onclick=\"delete_item('location', '$id')\">Delete Location</button><br><br>";
        echo "<button type='button' onclick=\"update_item('location', '$id', '', '', '')\">Update Location</button><br><br>";

    }
    else
    {
        echo "We're very sorry, but it seems something went wrong with grabbing the details.";
    }

  ?>

</div>




</body>


</html>