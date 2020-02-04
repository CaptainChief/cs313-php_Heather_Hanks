<?php
    require "dbConnect.php";
    $db = get_db();
?>


<form action="data.php" method="post">
    <select name="Scripture">
        <option value="John">John</option>
        <option value="D&C">D&C</option>
        <option value="Mosiah">Mosiah</option>
    </select>

    <input type = "submit" value = "Search">
</form>

<hr>

<?php
   if (isset($_POST['Scripture'])) {
    $scr = $db->prepare("SELECT * FROM scriptures WHERE book = $_POST['Scripture']");
    $scr->execute();

    echo "<h1> <b>SCRIPTURE RESOURCES</b> </h1>";
    while ($frow = $scr->fetch(PDO::FETCH_ASSOC))
    {
        $book = $frow["book"];
        $chapter = $frow["chapter"];
        $verse = $frow["verse"];
        $content = $frow["content"];
        echo "<p><b>$book $chapter:$verse</b> - \"$content\"</p><br>";
    }
   }
?>
