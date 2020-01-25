<!DOCTYPE html>
<html>
<head>
    <title>Week 3 Team Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<body>

<div class = "center">
    <div class = "item">
        <form action="confirm">
            Street Address: <input type = "text"><br>
            State: <input type = "text"><br>
            Zip Code: <input type = "text"><br>
            <div class="center">
                <input type = "button" value = "Confirm Purchase" onclick="window.location.href = 'confirm.php'">
            </div>
        </form>
        <div class = "center">
            <input type = "button" value = "Back to Cart" onclick="window.location.href = 'view_cart.php'">
        </div>
    </div>
</div>

</body>
</html>