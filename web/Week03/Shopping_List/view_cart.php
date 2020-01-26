<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Week 3 Team Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<body>
  <div class = "center">
    <h1>Your Cart</h1>
  </div>
  <ul>
    <li><a href="browse_page.php">Browse Books</a></li>
    <li><a class="active" href="">View Cart</a></li>
  </ul>

  <div class = "center">
    <div class = "item">

    <?php

        if(isset($_POST["PJ_2"]))
        {
          $_SESSION["book_1"] = $_POST["PJ_2"];
        }
        if(isset($_POST["book_2"]))
        {
          $_SESSION["book_2"] = $_POST["Cov"];
        }
        if(isset($_POST["book_3"]))
        {
          $_SESSION["book_3"] = $_POST["Ran"];
        }

        if($_SESSION["book_1"] == "Add Book 1 to Cart")
        { ?>

          <div>Percy Jackson: Sea of Monsters - Rick Riordan<br>
          <input type = 'checkbox' name = 'PJ_2' value='Remove from Cart'><br><hr>
          </div>
        
          <?php }
        if($_SESSION["book_2"] == "Add Book 2 to Cart")
        { ?>

          <div>Covenants - Lorna Freeman<br>
          <input type = 'checkbox' name = 'Cov' value='Remove from Cart'><br><hr>
          </div>
        
          <?php }
        if($_SESSION["book_3"] == "Add Book 3 to Cart")
        { ?>

          <div>Ransom - Julie Garwood<br>
          <input type = 'checkbox' name = 'Ran' value='Remove from Cart'><br><hr>
          </div>;
        
         <?php }
        else
        {
          echo "There are currently no items in your cart.<br><br>";

        }
      ?>

      <div class = "center">
      <input type = "button" onclick="window.location.href = 'checkout.php'" value="Checkout">
      
      </div>
      </form>

    </div>
  </div>
 

</body>


</html>