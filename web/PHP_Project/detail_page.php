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
        var urlParams = new URLSearchParams(window.location.search);
        console.log(urlParams.has('post')); // true
        console.log(urlParams.get('action')); // "edit"
        console.log(urlParams.getAll('action')); // ["edit"]
        console.log(urlParams.toString()); // "?post=1234&action=edit"
        console.log(urlParams.append('active', '1')); // "?post=1234&action=edit&active=1"

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