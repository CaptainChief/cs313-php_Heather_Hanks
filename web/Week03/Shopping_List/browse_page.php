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
<script>
  function checked(item)
  {
    alert("In the function");
    $_SESSION[item] = item;
    alert(item); 
  }
</script>
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
        $file_lines = file('items.txt');
        $items = [];

        $i = 0;
        foreach ($file_lines as $line)
        {
          $items[$i] = $line;
          $i++;
        }

        echo "<br>";
        foreach ($items as $item)
        {
          echo "$item <br><br>\n ";
          echo "<input type='checkbox' name='books' value='$item' id='$item' onclick = \"checked('$item')\"> Add to Cart <br><hr>\n";
        }
      ?>
      <div class = "center">
        <input type = "button" name = "submission" value = "Add all to cart!">
      </div>
  </div>

    <br><br><br>
      
  </div>    
  </div>
</body>


</html>