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

  function remove(item)
  {
    if(item == "PJ_2")
    {
      alert("in book 1");
      <?php 
        $i = 1;
        $_SESSION["book_1"] = $i;
        ?>
    }
    else if(item == "Cov")
    {
      alert("in book 2");
      <?php 
        $i = 1;
        $_SESSION["book_2"] = $i;
        ?>
    }
    else if(item == "Ran")
    {
      alert("in book 3");
      <?php 
        $i = 1;
        $_SESSION["book_3"] = $i;
        ?>
    }
  }

  function clicked()
  {
    <?php
    $_SESSION['book_1'] = 0;
    $_SESSION['book_2'] = 0;
    $_SESSION['book_3'] = 0;
    ?>
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
        if($_SESSION["book_1"])
        { ?>

          <div>Percy Jackson: Sea of Monsters - Rick Riordan<br>
          <input type = 'button' name = 'PJ_2' onClick="remove('PJ_2')" value='Remove from Cart'><br><hr>
          </div>
        
          <?php }
        if($_SESSION["book_2"])
        { ?>

          <div>Covenants - Lorna Freeman<br>
          <input type = 'button' name = 'Cov' onClick="remove('Cov')" value='Remove from Cart'><br><hr>
          </div>
        
          <?php }
        if($_SESSION["book_3"])
        { ?>

          <div>Ransom - Julie Garwood<br>
          <input type = 'button' name = 'Ran' onClick="remove('Ran')" value='Remove from Cart'><br><hr>
          </div>;
        
         <?php }
        else
        {
          echo "There are currently no items in your cart.<br><br>";
          echo $_SESSION['book_1'] . "<br>";
          echo $_SESSION['book_2'] . "<br>";
          echo $_SESSION['book_3'] . "<br>";
        }
      ?>


      <input type = 'button' onClick="clicked()" value = "Remove All Items from Cart">
    </div>
  </div>
 

</body>


</html>