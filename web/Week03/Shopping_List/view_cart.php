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
    //if(!empty($_POST['books']))
    // {
    //   foreach $_POST['books'] as $book
    //   {
    //     // $_SESSION["cart_item_"$i] = htmlspecialchars($book);
    //     $i++;
    //   }
      // $_SESSION["index"] = $i;
    // }
  ?>

   <h1>Your Cart</h1>
   <div>

   </div>
 

</body>


</html>