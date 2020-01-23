<?php 
   // start session
   session_start();
   // save session variables into local variables
   $fave_animal = $_SESSION["favorite_animal"];
   $fave_color = $_SESSION["favorite_color"];
?>
<h1><?php // use the session variables 
        echo "Your favorite animal is: " . $fave_animal . "<br>"; 
        echo "And your favorite color is: " . $fave_color . "<br>"; ?></h1>
<?php 
    if(isset($_SESSION['pictureUrl']))
    { ?>
        <h3>Again, just for kicks.... from a form</h3>
        <img src="<?php echo $_SESSION['pictureUrl']; ?>">
    <?php }
?>