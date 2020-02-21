<?php
    session_start();
    require 'dbconnect.php';
    $db = get_db();
?>

<!DOCTYPE html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Sign Up! (not evil) >:)</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<script>

function new_user() {
   window.location.replace('signUp.php');
}

</script>
<body>

<h3><?php echo $_SESSION['errorStr']; ?></h3>

<form action="post_user.php" method="post">
    Username:<br>
    <input type="text" name="username" id="username"><br>
    Password:<br>
    <input type="password" name="pass" id="pass"><br><br>

    <input type="submit" name="create" value="Create"><br><br>
</form>

</body>
</html>
