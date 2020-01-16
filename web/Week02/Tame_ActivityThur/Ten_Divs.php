<!DOCTYPE html>
<html>
<head>
    <title>Week 2 Team Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>
<body>

<div>
    <h1>PHP Team Activity</h1>
    <?php
        for($i = 0; $i < 10; $i++)
        {
            if ($i % 2 == 0)
            {
                echo "<div class='red'>This is div #$i</div>";
            }
            else
            {
                echo "<div>This is div #$i</div>";
            }
        }
    ?>
</div>

</body>
</html>
