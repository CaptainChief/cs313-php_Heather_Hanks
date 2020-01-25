<?php
  session_start();
  $book_1 = $_SESSION["book_1"];
  $book_2 = $_SESSION["book_2"];
  $book_3 = $_SESSION["book_3"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Week 3 Team Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<script>

  function remove(item)
  {
    if(item == "PJ_2")
    {
      <?php $_SESSION["book_1"] = "removed";?>
    }
    else if(item == "Cov")
    {
      <?php $_SESSION["book_2"] = "removed";?>
    }
    else if(item == "Ran")
    {
      <?php $_SESSION["book_3"] = "removed";?>
    }
  }

</script>

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

        if($book_1 == "add")
        { 

          echo "<div>Percy Jackson: Sea of Monsters - Rick Riordan";
          echo "<input type = 'button' name = 'PJ_2' value='Remove from Cart'><br><hr>";
          echo "</div>";
        
         }
        else if($book_2 == "add")
        { 

          echo "<div>Covenants - Lorna Freeman";
          echo "<input type = 'button' name = 'Cov'value='Remove from Cart'><br><hr>";
          echo "</div>";
        
         }
        else if($book_3 == "add")
        { 

          echo "<div>Ransom - Julie Garwood";
          echo "<input type = 'button' name = 'Ran' value='Remove from Cart'><br><hr>"
          echo "</div>";
        
         }
        else
        {
          echo "There are currently no items in your cart.";
        }
      ?>
    </div>
  </div>
 

</body>


</html>