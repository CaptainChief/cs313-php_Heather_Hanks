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

    <form action="view_cart.php" method = "POST">
      <div>
        Percy Jackson: Sea of Monsters - Rick Riordan<br>
        <input type = 'checkbox' name = 'PJ_2' value = "book_1">Add to Cart<br><hr>
      </div>
      
      <div>
        Covenants - Lorna Freeman<br>
        <input type = 'checkbox' name = 'Cov' value = "book_2">Add to Cart<br><hr>
      </div>
      
      <div>
        Ransom - Julie Garwood<br>
        <input type = 'checkbox' name = 'Ran' value = "book_3">Add to Cart<br><hr>
      </div>

      <div class="center">
        <input type = "submit" name = "submission" value = "Add to Cart">
      </div>

    </form>

  </div>      
  </div>    
  </div>
</body>


</html>