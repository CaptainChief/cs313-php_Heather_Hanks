<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
            $personid = $_GET['personId'];

            $statement = $db->prepare('SELECT * FROM w6_user WHERE ID = :personid');
            $statement->bindValue(':personid', $personid);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
               $id = $row['id'];
               $first = $row['first_name'];
               $last = $row['last_name'];
               $food_id = $row['food_type'];

               $statement = $db->prepare('SELECT food FROM w6_food WHERE ID = :food_id');
               $statement->bindValue(':food_id', $food_id);
               $statement->execute();
               while ($frow = $statement->fetch(PDO::FETCH_ASSOC))
               {
                  $food = $frow['food'];
               }

               echo "<h1>$first $last's favorite food is $food</h1>";

            }
            // retrieve url parameter
            // execute query to pull up data from that id
            // execute another query to get food data
            // display name and favorite food
         ?>

		</div>
	</body>
</html>