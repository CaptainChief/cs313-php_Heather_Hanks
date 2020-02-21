<?php
   session_start();
   require 'dbconnect.php';
   $db = get_db();
   $url = 'login.php';
   $name = $_POST['username'];
   $pass = $_POST['pass'];


   // echo "username = $name\n";
   // echo "pass = $pass\n";
   $hash = password_hash($pass, PASSWORD_DEFAULT);
   // echo "hash = $hash\n";

   $retrieveStatement = $db->prepare("SELECT username FROM ta07_user WHERE username = :name");
   $retrieveStatement->bindValue(':name', $name);
   $retrieveStatement->execute();

   $row = $retrieveStatement->fetch(PDO::FETCH_ASSOC);
   if (isset($row['username'])) {
      $_SESSION['errorStr'] = "Username already taken";
      $url = 'signUp.php';
      header('Location: ' . $url);
      die();
   }

   $inserStatement = $db->prepare("INSERT INTO ta07_user (username, userpassword) VALUES(:name, :hash)");
   $inserStatement->bindValue(':name', $name);
   $inserStatement->bindValue(':hash', $hash);
   $inserStatement->execute();

   header('Location: ' . $url);
   die();
?>
