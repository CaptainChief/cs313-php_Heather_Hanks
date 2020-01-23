<?php
   // retrieve POST data
   $textForPHP = htmlspecialchars($_POST["textForPHP"]);
   $email = htmlspecialchars($_POST["emailForPHP"]);
   $password = htmlspecialchars($_POST["passwordForPHP"]);
   $optradio = htmlspecialchars($_POST["optradio"]);
   $textbox = htmlspecialchars($_POST["textbox"]);

   echo "Countries: <br>";
   if (!empty($_POST["countries"]))  {
      foreach ($_POST["countries"] as $key => $value) {
         echo "$key. $value<br>";
      }
   }
   

   // do something with the data
   echo "Your name is $textForPHP.<br>Your email is $email.<br>Your password is $password.<br>Your major is $optradio.<br>Your comments are $textbox";

?>