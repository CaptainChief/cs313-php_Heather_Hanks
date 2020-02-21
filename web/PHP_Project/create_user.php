<?php
    session_start();
    require 'dbConnect.php';
    $db = get_db();
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
    <li><a class="active" href=""></a></li>
  </ul>


<h3><?php echo $_SESSION['errorStr']; ?></h3>

<form action="post_user.php" method="post">
<div class = "center">
    First name:<br>
    <input type="text" name="firstname" id="firstname"><br>
    Password:<br>
    <input type="password" name="pass" id="pass"><br><br>

    <input type="submit" name="log_in" value="Log In"><br><br>
    <input type="button" name="new_user" value="Create New User"><br><br>
  </div>
</form>

</body>
</html>