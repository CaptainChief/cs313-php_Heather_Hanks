<?php
   require("dbConnect.php");
   $db = get_db();

    $name = $_POST["specie_name"];
    $def = $_POST["specie_def"];
    $g_name = $_POST["genus"];
    $habitats = $_POST["habitats"];
    $locations = $_POST["locations"];

    echo "The name of the genus is: $habitats";
    echo "The name of the locations are: $locations"


    //Filter
    $name = htmlspecialchars($name);
    $def = htmlspecialchars($def);
?>
