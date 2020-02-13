<?php
   require("dbConnect.php");
   $db = get_db();

    $name = $_POST["specie_name"];
    $def = $_POST["specie_def"];
    $g_name = $_POST["genus"];

    echo "The name of the genus is: $g_name";


    //Filter
    $name = htmlspecialchars($name);
    $def = htmlspecialchars($def);
?>
