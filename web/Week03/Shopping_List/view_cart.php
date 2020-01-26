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
<form action="view_cart.php">
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
      

        if($_SESSION["book_1"] == "book_1")
        { ?>

          <div>Percy Jackson: Sea of Monsters - Rick Riordan<br>
          <input type = 'checkbox' name = 'PJ_2' value='Remove from Cart'>Remove from Cart<br><hr>
          </div>
        
          <?php }
        if($_SESSION["book_2"] == "book_2")
        { ?>

          <div>Covenants - Lorna Freeman<br>
          <input type = 'checkbox' name = 'Cov' value='Remove from Cart'>Remove from Cart<br><hr>
          </div>
        
          <?php }
        if($_SESSION["book_3"] == "book_3")
        { ?>

          <div>Ransom - Julie Garwood<br>
          <input type = 'checkbox' name = 'Ran' value='Remove from Cart'>Remove from Cart<br><hr>
          </div>;
        
         <?php }
        if($_SESSION["book_3"] != "book_3" && $_SESSION["book_2"] != "book_2" && $_SESSION["book_1"] != "book_3")
        {
          echo "There are currently no items in your cart.<br><br>";

        }
      ?>


      <div class = "center">
      <input type = "submit" name = "submission" value = "Remove from Cart">
      <input type = "button" onclick="window.location.href = 'checkout.php'" value="Checkout">
      
      </div>
      </form>

    </div>
  </div>
 

</body>


</html>