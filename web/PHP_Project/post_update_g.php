<?php
   require "dbConnect.php";
   $db = get_db();

   $name = $_POST["genus_name"]; //specie
   $def = $_POST["genus_def"];   //specie
   $g_id = $_POST["g_id"];       //specie

   echo "this is $g_id";


   



?>