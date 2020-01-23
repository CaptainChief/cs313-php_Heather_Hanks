<!DOCTYPE html>
<html>
<head>
    <title>Week 3 Team Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<body>
  <h1>Bookstore</h1>

  <ul>
    <li><a class="active" href="">Browse Items</a></li>
    <li><a href="view_cart.php">View Cart</a></li>
  </ul>

  <div class = "library"></div>
 
  <div class = "library-text">

  <?php
    $file_lines = file('items.txt');
    $items = [];

    // $i = 0;
    // foreach ($file_lines as $line)
    // {
    //   $items($i) = $line;
    //   $i++;
    // }

    // foreach ($items as $item)
    // {
    //   echo "<div>$item <br> <button type = 'button'>Add to Cart</button></div>";
    // }
  ?>

    <!-- <div>
      Fablehaven: Book 1 <br>
      <button type="button">Add to Cart</button>
    </div>
    <div>
      Fablehaven: Book 2 <br>
      <button type="button">Add to Cart</button>
    </div>
    <div>
      Fablehaven: Book 3 <br>
      <button type="button">Add to Cart</button>
    </div>
    <div>
      Fablehaven: Book 4 <br>
      <button type="button">Add to Cart</button>
    </div>
    <div>
      Fablehaven: Book 5 <br>
      <button type="button">Add to Cart</button>
    </div>
    <div>
      Percy Jackson: Book 1 <br>
      <button type="button">Add to Cart</button>
    </div>
    <div>
      Percy Jackson: Book 2 <br>
      <button type="button">Add to Cart</button>
    </div>
    <div>
      Percy Jackson: Book 3 <br>
      <button type="button">Add to Cart</button>
    </div>
    <div>  
      Percy Jackson: Book 4 <br>
      <button type="button">Add to Cart</button>
    </div>
    <div>
      Percy Jackson: Book 5 <br>
      <button type="button">Add to Cart</button>
    </div> -->

  </div>



</body>


</html>