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

<script>

  function new_user() 
  {
    window.location.replace('create_user.php');
  }

</script>

<body>

<div class="headerLogo center"></div>

  <ul class = "center">
    <li><a class="active" href=""></a></li>
  </ul>

<div class = "center">

<form action="verify_user.php" method="post">
    Username:<br>
    <input type="text" name="firstname" id="firstname"><br>
    Password:<br>
    <input type="password" name="pass" id="pass"><br><br>

    <input type="submit" name="log_in" value="Log In"><br><br>
</form>

<input type="button" name="new_user" value="Create New User" onclick="new_user()"><br><br>

</div>

</body>


</html>