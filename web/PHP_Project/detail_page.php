<!DOCTYPE html>
<html>
<head>

    <title>Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<script>
    function myFunction() 
    {
        var value = document.getElementById(window.location.href).id;
        alert(value);
    }
</script>

<body>

<div class="headerLogo center"></div>

<ul>
    <li><a href="main_page.php">Home Page</a></li>
</ul>

  <div class = "center">
    <button type = "button" onclick="myFunction()">Click Me!</button>
  </div>




</body>


</html>