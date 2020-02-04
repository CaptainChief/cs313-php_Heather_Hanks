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

        $relationships = $db->prepare("SELECT description FROM relationsihp WHERE id = $relate_id");
        $relationships->execute();
        whiel($rRow = $relationship->fetch(PDO::FETCH_ASSOC))
        {
            $relationship = rRow["description"]
        }



        echo "<p>$first $last is my $relationship ($relate_id)</p>";
    }

?>