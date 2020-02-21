<?php
   require("dbConnect.php");
   $db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Week 2 Team Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php

    $new = $db->prepare("SELECT book, verse, ffff");
    $new->execute();

?>

</body>
</html>
