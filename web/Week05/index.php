<?php 

    require "dbConnect.php";
    $db = get_db();

    $members = $db->prepare("SELECT * FROM family_members");
    $members->execut();

    while ($frow = $members->fetch(PDO::FETCH_ASSOC))
    {
        $first = $frow["first_name"];
        $last = $frow["last_name"];
        $relate_id = $frow["relationship_id"];

        echo "<p>$first $last is my $relate_id</p>";
    }

?>