<!DOCTYPE html>
<html>
<head>

    <title>Week 2 Team Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<body>

<div class="headerLogo center"></div>

<ul>
    <li><a href="main_page.php">Home Page</a></li>
    <li><a class="active" href="">Create Habitat</a></li>
    <li><a href="create_location.php">Create Location</a></li>
    <li><a href="create_species.php">Create Species</a></li>
    <li><a href="create_genus.php">Create Genus</a></li>
  </ul>

  <div class = "create">
  <form action="post_habitat.php" method="post">

    Habitat Name: <input type="text" id="habitat_name" name="habitat_name"><br><br>
    Habitat Definition: <br> 
    <textarea id="habitat_def" name="habitat_def" rows="4" cols="50">
    </textarea><br><br>


      <button type="submit" value="Create Habitat">Create Habitat</button><br><br>
  </form>
  </div>

</body>


</html>