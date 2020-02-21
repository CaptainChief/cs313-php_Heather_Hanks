<?php

session_start();
require 'dbconnect.php';
$db = get_db();
$url = 'login.php';

$_SESSION['userID'] = "";
$_SESSION['errorStr'] = "";


$name = $_POST['firstname'];
$pass = $_POST['pass'];

$statement = $db->prepare("SELECT id, userpassword FROM ta07_user WHERE username = :name");
$statement->bindValue(':name', $name);
$statement->execute();
$row = $statement->fetch(PDO::FETCH_ASSOC);

if (!isset($row['id'])) {
   header('Location: ' . $url);
   die();
}

$passwordHash = $row['userpassword'];

echo "verification: " . password_verify($pass, $passwordHash) . "<br>";
echo "PASSWORD HASH: " . $passwordHash;
if (password_verify($pass, $passwordHash)) {
   // Correct Password

   $_SESSION['userId'] = $row['id'];
   $url = 'success.php';
}

$_SESSION['errorStr'] = "killed in the password verification";
header('Location: ' . $url);
die();

?>
