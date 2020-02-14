<?php
   require "dbConnect.php";
   $db = get_db();
?>

<!DOCTYPE html>
<html>
<head>

    <title>PHP Project Create Habitat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<body>

<div class="headerLogo center"></div>

  <ul>
    <li><a href="main_page.php">Cancel Update</a></li>
  </ul>

<?php

?>


  <br><br>
  <div class = "create">
  <form action="post_update.php" method="post">

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
        echo" Habitat Name: <input type=\"text\" id=\"habitat_name\" name=\"habitat_name\"><br><br>
              Habitat Definition: <br> 
              <textarea id=\"habitat_def\" name=\"habitat_def\" rows=\"4\" cols=\"50\">
              </textarea><br><br>


        <button type="submit" value="Create Habitat">Create Habitat</button><br><br>
    </form>
    </div>";

  ?>

</body>


</html>