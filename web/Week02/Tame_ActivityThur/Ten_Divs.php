<!DOCTYPE html>
<html>
<head>
    <title>Week 2 Team Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>
<body>

    <div class = "outer_div">
    <h1>PHP Team Activity</h1>
    <?php
    function tenTimes()
    {
        for($i = 0; $i < 10; $i++)
        {
            if ($i % 2 == 0)
            {
                echo "<div class=\"red inner_border\">This is div #$i</div><br>";
            }
            else
            {
                echo "<div class =\"inner_border\">This is div #$i</div><br>";
            }
        }
    }
    ?>
    <div class ="half" style = "float: left">
        <h1>PHP Team Activity</h1>
        <?php tenTimes() ?>
    </div>
    <div class = "half" style = "float: right">
        <h1>PHP Team Activity</h1>
        <?php tenTimes() ?>
    </div>
    </div>
</body>
</html>