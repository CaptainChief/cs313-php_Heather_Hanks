<?php
    session_start();
    require 'dbConnect.php';
    $db = get_db();
    $_SESSION['errorStr'] = "";
?>

<!DOCTYPE html>
<html>
<head>

    <title>PHP Project Log In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<body>

<div class="headerLogo center"></div>

  <ul class = "center">
    <li><a class="active" href="">Log In</a></li>
    <li><a class="" href="create_user.php">Create New User</a></li>
  </ul>

<div class = "center">

<hr>
<h3 class="title"> Welcome to Genesis </h3>
<hr>

<form action="verify_user.php" method="post">
    Username:<br>
    <input type="text" name="username" id="username"><br>
    Password:<br>
    <input type="password" name="pass" id="pass"><br><br>

    <input type="submit" name="log_in" value="Log In"><br><br>
</form>

</div>

</body>


</html>