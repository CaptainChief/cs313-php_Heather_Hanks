<?php 
   // start session
   session_start();
   // save session variables into local variables
   $fave_animal = $_SESSION["favorite_animal"];
   $fave_color = $_SESSION["favorite_color"];
?>
<h1><?php // use the session variables 
        echo "Your favorite animal is: " . $fave_animal . "<br>"; 
        echo "And your favorite color is: " . $fave_color . "<br>"; ?></h1>
<?php ?>