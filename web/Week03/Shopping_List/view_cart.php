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

  <?php

    $i = 0;
    $items = [];
    if(!empty($_POST['books']))
    {
      foreach ($_POST['books'] as $key => $value)
      {
       array_push($items, htmlspecialchars($value));
      }
    }
  ?>

    <div class = "center">
      <?php
       if (!empty($items))
       {
      //   foreach ($items as $item)
      //   {
      //     echo $items;
      //   }
       }
       else
       {
      //   echo "There are currently no items in your cart.";
       }
      ?>

    </div>
 

</body>


</html>