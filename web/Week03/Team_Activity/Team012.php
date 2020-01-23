<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="tuesdayPost.php" method="post">

        <!-- 'name' input -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="textForPHP" class="form-control" placeholder="Enter name" id="name">
        </div>

        <!-- 'email' input -->
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="emailForPHP" class="form-control" placeholder="Enter email" id="email">
        </div>

        <!-- 'password' input -->
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="passwordForPHP" class="form-control" placeholder="Enter password" id="pwd">
        </div>

        <!-- Radio buttons -->
        <?php
            $majors = array("Computer Science, CS", "Web Design and Development, WDD", "Computer Information Technology, CIT", "Computer Engineering, CE");
            foreach ($majors as $key => $value) {
               echo "<div class=\"form-check-inline\">
                        <label class=\"form-check-label\">
                           <input type=\"radio\" class=\"form-check-input\" name=\"optradio\" value=\"$value\">$value
                        </label>
                     </div>";
            }
        ?>
        <!-- End of radio button -->

        <!-- Textarea/ comments -->
        <div class="form-check-inline">
            <label class="form-check-label">
                <input type="textarea" class="form-check-input" name="textbox">
            </label>
        </div>

        <!-- checkboxes -->
        <div class="form-check-inline">
            <label class="form-check-label">
                <input type="checkbox" id="country1" name="countries[]" value="NA North America">North America<br>
                <input type="checkbox" id="country2" name="countries[]" value="SA South America">South America<br>
                <input type="checkbox" id="country3" name="countries[]" value="E Europe">Europe<br>
                <input type="checkbox" id="country4" name="countries[]" value="AS Asia">Asia<br>
                <input type="checkbox" id="country5" name="countries[]" value="AU Australia">Australia<br>
                <input type="checkbox" id="country6" name="countries[]" value="AF Africa">Africa<br>
                <input type="checkbox" id="country7" name="countries[]" value="AN Antarctica">Antarctica<br>
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
