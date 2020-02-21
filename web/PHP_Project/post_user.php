<?php
   session_start();
   require 'dbConnect.php';

   $db = get_db();

   $url = 'log_in.php';
   $name = $_POST['username'];
   $pass = $_POST['pass'];

   if($name == "" || $pass == "")
   {
      $_SESSION['errorStr'] = "Please fill in both fields.";
      $url = 'create_user.php';
      header('Location: ' . $url);
      die();
   }


   $hash = password_hash($pass, PASSWORD_DEFAULT);

   $retrieveStatement = $db->prepare("SELECT creator_name FROM creators WHERE creator_name = :name");
   $retrieveStatement->bindValue(':name', $name);
   $retrieveStatement->execute();

   $row = $retrieveStatement->fetch(PDO::FETCH_ASSOC);
   if (isset($row['creator_name'])) {
      $_SESSION['errorStr'] = "Username already taken";
      $url = 'create_user.php';
      header('Location: ' . $url);
      die();
   }

   $inserStatement = $db->prepare('INSERT INTO creators (creator_name, creator_pass) VALUES(:name, :hash)');
   $inserStatement->bindValue(':name', $name);
   $inserStatement->bindValue(':hash', $hash);
   $inserStatement->execute();

   header('Location: ' . $url);
   die();
?>
