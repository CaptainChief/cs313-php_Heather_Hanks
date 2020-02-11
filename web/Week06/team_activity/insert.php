<?php
   require("dbConnect.php");
   $db = get_db();

   try
   {
      $book = $_POST['book'];
      $chapter = $_POST['chapter'];
      $verse = $_POST['verse'];
      $content = $_POST['script_content'];
      $topic = $_POST['topic']; //array

      $query = 'INSERT INTO scriptures(book, chapter, verse, content) VALUES(:book, :chapter, :verse, :content)';
      $statement = $db->prepare($query);
      $statement->bindValue(':book', $book); //This will help keep statements safe
      $statement->bindValue(':chapter', $chapter);
      $statement->bindValue(':verse', $verse);
      $statement->bindValue(':content', $content);
      $statement->execute();
      $scriptureId = $db->lastInsertId("scriptures_id_seq");
      foreach ($topic as $key => $value) 
      {
         $new = $db->prepare("INSERT INTO topic_scripture(topic_id, scripture_id) VALUES($value, $scriptureId");
         $new->execute();
      }

   }
   catch (Exception $ex)
   {
      echo "Error with DB. Details: $ex";
      die();
   }
   header("Location: display.php");
   die();
?>
