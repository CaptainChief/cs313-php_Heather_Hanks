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

    <form method = "POST">
      <?php

        if(array_key_exists('PJ_2', $_POST))
        {
          button_1();
        }
        if(array_key_exists('Cov', $_POST))
        {
          button_2();
        }
        if(array_key_exists('Ran', $_POST))
        {
          button_3();
        }

        function button_1()
        {
          echo "Percy was clicked.";
          $_SESSION["book_1"] = "remove";
        }
        function button_2()
        {
          echo "Cov was clicked.";
          $_SESSION["book_2"] = "remove";
        }
        function button_3()
        {
          echo "Ran was clicked.";
          $_SESSION["book_3"] = "remove";
        }


        if($_SESSION["book_1"] == "add")
        { ?>

          <div>Percy Jackson: Sea of Monsters - Rick Riordan<br>
          <input type = 'button' name = 'PJ_2' value='Remove from Cart'><br><hr>
          </div>
        
          <?php }
        if($_SESSION["book_2"] == "add")
        { ?>

          <div>Covenants - Lorna Freeman<br>
          <input type = 'button' name = 'Cov' value='Remove from Cart'><br><hr>
          </div>
        
          <?php }
        if($_SESSION["book_3"] == "add")
        { ?>

          <div>Ransom - Julie Garwood<br>
          <input type = 'button' name = 'Ran' value='Remove from Cart'><br><hr>
          </div>;
        
         <?php }
        else
        {
          echo "There are currently no items in your cart.<br><br>";
          echo $_SESSION['book_1'] . "<br>";
          echo $_SESSION['book_2'] . "<br>";
          echo $_SESSION['book_3'] . "<br><br>";
        }
      ?>
      </form>

    </div>
  </div>
 

</body>


</html>