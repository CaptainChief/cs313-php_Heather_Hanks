<?php
   require("dbConnect.php");
   $db = get_db();

    $name = $_POST["location_name"];
    $def = $_POST["location_def"];

    echo "The name of the genus is: $name";


    //Filter
    $name = htmlspecialchars($name);
    $def = htmlspecialchars($def);
?>