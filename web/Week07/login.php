<?php
    session_start();
    require 'dbconnect.php';
    $db = get_db();
    $_SESSION['errorStr'] = "";
?>

<!DOCTYPE html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Login! (not evil) >:)</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<script>

function new_user() {
   window.location.replace('signUp.php');
}

</script>
<body>
<h3><?php echo $_SESSION['errorStr']; ?></h3>

<form action="verify.php" method="post">
    Username:<br>
    <input type="text" name="firstname" id="firstname"><br>
    Password:<br>
    <input type="password" name="pass" id="pass"><br><br>

    <input type="submit" name="log_in" value="Log In"><br><br>
</form>

<input type="button" name="new_user" value="Create New User" onclick="new_user()"><br><br>

</body>
</html>
