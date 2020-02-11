<?php
   require "dbConnect.php";
   $db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Week 2 Team Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="Click_Me.js"></script>
</head>
<body>

<form action="">
    Book: <input type="text" id="book"> <br>
    Chapger: <input type="text" id="chapter"> <br>
    Verse: <input type="text" id="verse"> <br><br>

    Verse Content:
    <textarea id="script_content" rows="4" cols="50">
    </textarea><br><br>

    <?php
        $db->prepare("SELECT * FROM topics");
        $statement->execute();
        
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            $id = $row['id'];
            $name = $row['name'];

            echo "<input type='checkbox' name='$id' value='$name'>";
        }
    ?>

</form>
</body>
</html>