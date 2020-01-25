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
    <h1>Bookstore</h1>
  </div>

  <ul>
    <li><a class="active" href="">Browse Items</a></li>
    <li><a href="view_cart.php">View Cart</a></li>
  </ul>

  <div class = "center">
  <div class = "item">

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
        $_SESSION["book_1"] = 1;
      }
      function button_2()
      {
        $_SESSION["book_2"] = 1;
      }
      function button_3()
      {
        $_SESSION["book_3"] = 1;
      }

      ?>

      <div>
        Percy Jackson: Sea of Monsters - Rick Riordan<br>
        <input type = 'button' name = 'PJ_2' onClick="add('PJ_2')" value = "Add to Cart"> <br><hr>
      </div>
      
      <div>
        Covenants - Lorna Freeman<br>
        <input type = 'button' name = 'Cov' onClick="add('Cov')" value = "Add to Cart"> <br><hr>
      </div>
      
      <div>
        Ransom - Julie Garwood<br>
        <input type = 'button' name = 'Ran' onClick="add('Ran')" value = "Add to Cart"> <br><hr>
      </div>

      <?php
      echo $_SESSION["book_1"] . "<br>";
      echo $_SESSION["book_1"] . "<br>";
      echo $_SESSION["book_1"] . "<br>";
      ?>

  </div>

    <br><br><br>
      
  </div>    
  </div>
</body>


</html>