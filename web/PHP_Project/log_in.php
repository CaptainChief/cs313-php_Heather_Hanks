<!DOCTYPE html>
<html>
<head>

    <title>Week 2 Team Assignment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="personal.css">
</head>

<script>

function main()
{
  window.location.replace('main_page.php');
}

</script>

<body>

<div class="headerLogo center"></div>

  <ul class = "center">
    <li><a class="active" href=""></a></li>
  </ul>

  <div class = "center">
    First name:<br>
    <input type="text" name="firstname" id="first_name"><br>
    Password:<br>
    <input type="password" name="pass" id="id"><br><br>

    <input type="button" name="log_in" value="Log In" onClick="main()"><br><br>
    <input type="button" name="new_user" value="Create New User"><br><br>
  </div>

</body>


</html>