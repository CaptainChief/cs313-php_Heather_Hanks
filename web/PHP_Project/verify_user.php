<?php

session_start();
require 'dbConnect.php';
$db = get_db();
$url = 'log_in.php';

$_SESSION['userID'] = "";
$_SESSION['errorStr'] = "";


$name = $_POST['username'];
$pass = $_POST['pass'];

$statement = $db->prepare("SELECT creator_id, creator_pass FROM creators WHERE creator_name = :name");
$statement->bindValue(':name', $name);
$statement->execute();
$row = $statement->fetch(PDO::FETCH_ASSOC);

if (!isset($row['creator_id'])) {
   header('Location: ' . $url);
   die();
}

$passwordHash = $row['creator_pass'];

if (password_verify($pass, $passwordHash)) {
   // Correct Password

   $_SESSION['userId'] = $row['creator_id'];
   $url = 'main_page.php';
}

header('Location: ' . $url);
die();

?>
