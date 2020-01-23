<?php
   // Start the session
   session_start();

?>
<!DOCTYPE html>
<html>
   <body>
      <?php
         // remove previous session variable
         // Set session variables
         $_SESSION["favorite_color"] = "Blue";
         $_SESSION["favorite_animal"] = "Wolves";
         $_SESSION["favorite_game"];
         // echo that variables have been set
         echo "Session variables have been set.";
      ?>

      <a href="Thursday_Session2.php">Check the variables on another page</a>

      <?php // set session variables using a form 

      ?>
   </body>
</html>