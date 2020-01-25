<!DOCTYPE html>
<html>
<head>
    <title>Week 3 Team Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<body>

<div class = "center">
    <h1>Checkout</h1>
  </div>
  <ul>
    <li><a href="view_cart.php">Browse Books</a></li>   
  </ul>

<div class = "center">
    <div class = "item">
        <form action="confirm">
            <div>
                <br><br>
                Street Address: <br><input type = "text"><br>
                State: <br><input type = "text"><br>
                Zip Code: <br><input type = "text"><br>
            </div>
            <div class="center">
                <input type = "button" value = "Confirm Purchase" onclick="window.location.href = 'confirm.php'">
            </div>
        </form>
    </div>
</div>

</body>
</html>