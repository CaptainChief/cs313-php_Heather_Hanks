<?php

session_start();
require 'dbConnect.php';
$db = get_db();
$url = 'log_in.php';

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

if (password_verify($pass, $passwordHash)) {
   // Correct Password

   $_SESSION['userId'] = $row['id'];
   $url = 'main_page.php';
}

header('Location: ' . $url);
die();

?>
