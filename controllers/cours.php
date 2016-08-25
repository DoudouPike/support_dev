<?php

$lang = $_GET["lang"];
$thisLesson = "SELECT title WHERE lang = $lang FROM lessons";
$dbLessons = mysqli_query($db, $thisLesson);

$count = 0;
while ($count < sizeof($dbLessons))
{
	mysqli_fetch_assoc($dbLessons);

	$count++;
}


/* Si categorie = 0,
alors $categorie = "Introduction"*/

/* Si categorie = 1,
alors $categorie = "Step 1"*/
 
require("views/cours.phtml");

?>