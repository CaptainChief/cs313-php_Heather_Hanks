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

      <h3>Just for kicksm let's try this with a form!</h3>
      <form action="" method="post">
          <input type = "text" name = "picture">
          <input type = "submit" name = "submission" value = "Submit!">
      </form>

      <?php 
        if(isset($_POST['submission']))
        {
            $_SESSION['pictureUrl'] = $_POST['picture'];
        }

      ?>
   </body>
</html>