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

  function add(item)
  {
    if(item == "PJ_2")
    {
      <?php
        $i = 1;
        $_SESSION["book_1"] = $i;
        ?>
    }
    else if(item == "Cov")
    {
      <?php 
        $i = 1;
        $_SESSION["book_2"] = $i;
        ?>
    }
    else if(item == "Ran")
    {
      <?php 
        $i = 1;
        $_SESSION["book_3"] = $i;
        ?>
    }
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