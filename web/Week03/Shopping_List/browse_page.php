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
      <?php $_SESSION["book_1"] = "add";?>
    }
    else if(item == "Cov")
    {
      <?php $_SESSION["book_2"] = "add";?>
    }
    else if(item == "Ran")
    {
      <?php $_SESSION["book_3"] = "add";?>
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
        Percy Jackson: Sea of Monsters - Rick Riordan
        <input type = 'button' name = 'PJ_2' onClick="add('PJ_2')"> Add to Cart <br><hr>
      </div>
      
      <div>
        Covenants - Lorna Freeman
        <input type = 'button' name = 'Cov' onClick="add('Cov')"> Add to Cart <br><hr>
      </div>
      
      <div>
        Ransom - Julie Garwood
        <input type = 'button' name = 'Ran' onClick="add('Ran')"> Add to Cart <br><hr>
      </div>

  </div>

    <br><br><br>
      
  </div>    
  </div>
</body>


</html>