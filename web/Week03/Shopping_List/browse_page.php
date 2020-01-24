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

  <div class = "center border">
    <form action="view_cart.php" method="post">
      <?php
        $file_lines = file('items.txt');
        $items = [];

        $i = 0;
        foreach ($file_lines as $line)
        {
          $items[$i] = $line;
          $i++;
        }

        foreach ($items as $item)
        {
          echo "<br><br>$item <br><br> ";
          echo "<input type='checkbox' name='books[]' value=$item>Add to Cart<br><br>";
        }
      ?>

      <input type = "submit" name = "submission" value = "Add all to cart!">
    </form>

    <br><br><br>

  </div>
  <div class="view library"></div>
</body>


</html>