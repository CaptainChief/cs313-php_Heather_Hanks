<?php
    require("dbConnect.php");
    $db = get_db();

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

    if($type == 'genus')
    {
        $query = "SELECT genus_id FROM animal_species WHERE genus_id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();

        $frow = $statement->fetch(PDO::FETCH_ASSOC);

        if($frow)
        {
            echo "<script> 
                  alert('There are animals still attached to this genus. Could not delete.');
                  window.location.href='main_page.php'; 
                  </script>";
        }
        else
        {
            $query = "DELETE FROM genus WHERE genus_id = $id";
            $statement = $db->prepare($query);
            $statement->execute();

            echo "<script> alert('Genus Deleted.');
                  window.location.href='main_page.php'; </script>";
        }
    }
    else if($type == 'specie')
    {
        $query = "DELETE FROM species_and_habitats WHERE specie_id = $id";
        $statement = $db->prepare($query);
        $statement->execute();

        $query = "DELETE FROM species_and_location WHERE specie_id = $id";
        $statement = $db->prepare($query);
        $statement->execute();

        $query = "DELETE FROM animal_species WHERE specie_id = $id";
        $statement = $db->prepare($query);
        $statement->execute();

        echo "<script> alert('Specie Deleted.');
              window.location.href='main_page.php'; </script>";
        
    }
    else if($type == 'habitat')
    {
        $query = "SELECT habitat_id FROM species_and_habitats WHERE habitat_id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();

        $frow = $statement->fetch(PDO::FETCH_ASSOC);

        if($frow)
        {
            echo "<script> 
                  alert('There are animals still attached to this habitat. Could not delete.');
                  window.location.href='main_page.php'; 
                  </script>";
        }
        else
        {
            $query = "DELETE FROM habitats WHERE habitat_id = $id";
            $statement = $db->prepare($query);
            $statement->execute();

            echo "<script> alert('Habitat Deleted.');
                  window.location.href='main_page.php'; </script>";
        }
    }
    else if($type == 'location')
    {
        $query = "SELECT location_id FROM species_and_location WHERE location_id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();

        $frow = $statement->fetch(PDO::FETCH_ASSOC);

        if($frow)
        {
            echo "<script> 
                  alert('There are animals still attached to this location. Could not delete.');
                  window.location.href='main_page.php'; 
                  </script>";
        }
        else
        {
            $query = "DELETE FROM locations WHERE location_id = $id";
            $statement = $db->prepare($query);
            $statement->execute();

            echo "<script> alert('Location Deleted.');
                  window.location.href='main_page.php'; </script>";
        }
    }
    
    // header('Location: create_location.php');
?>