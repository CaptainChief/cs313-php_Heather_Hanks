<!DOCTYPE html>
<html>
<head>

    <title>Week 2 Team Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<body>

  <ul>
    <li><a href="main_page.php">Home Page</a></li>
    <li><a class="active" href="">Intro Page</a></li>
    <li><a href="index_page.php">Assignments</a></li>
  </ul>

  <div class = "forest"></div>

  <div class = "forest-text">
    <div class = "left">
      Name: Heather Hanks <br>
      Major: Computer Science <br><br>
    </div>

    <div class = "left indent">
      <img src="me.jpg" alt="Heather Hanks the author" height="150" width="100"><br><br>
    </div>
    
    <div class = "left indent">
      I am in my final semester for college. I plan on working at Boeing when I graduate in April. I have had the opportunity to intern for them for <br>
      several years now and am excited to work for them on a more permanent basis. <br><br><br>

      I am originally from Oklahoma, and have a family of fourteen. It's definitly been a unique experience.
    </div>

    <p>Some of my favorite animals include: <br>

    <?php
      $animals = array("Dogs", "Cats", "Horses", "Foxes", "Wolves");

      $number = 1;
      for($i = 0; $i < count($animals); $i++)
      {
        if($number == count($animals))
        {
          echo "and $number. $animals[$i].";
        }
        else
        {
          echo "$number. $animals[$i], ";
        }
        $number++;
      }
    ?>

  </div>  


</body>

</html>