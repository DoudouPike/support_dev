<?php

$titlePage = urldecode($_GET["titre"]);
$req = "SELECT id, title, goal, content, DATE_FORMAT(date, '%d-%m-%Y') date, DATE_FORMAT(date_last, '%d-%m-%Y à %H:%i:%s')date_last FROM lessons WHERE title = '".$titlePage."'";
$thisDb = mysqli_query($db, $req);

$thisDbTab = mysqli_fetch_assoc($thisDb);
$id = $thisDbTab["id"];
$titre = $thisDbTab["title"];
$objectif = $thisDbTab["goal"];
$contenu = $thisDbTab["content"];
$d_creation = $thisDbTab["date"];
$d_modif = $thisDbTab["date_last"];


if(isset($titre, $objectif, $contenu))
{
	if(isset($_SESSION["admin"]))
	{
		require("views/single_admin.phtml");
	}
	else{
		require("views/single.phtml");
	}
}
else
{
   require("controllers/404.php");
}

?>