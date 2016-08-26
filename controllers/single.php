<?php

$titlePage = urldecode($_GET["titre"]);
$allSingle = "SELECT * FROM lessons WHERE title = '".$titlePage."'";
$dbSingle = mysqli_query($db, $allSingle);

while($single = mysqli_fetch_assoc($dbSingle))
{	
	$titre = $titlePage;
	$objectif = $single["goal"];
	$contenu = $single["content"];
	$d_creation = $single["date"];
	$d_modif = $single["date_last"];
}

if(isset($titre, $objectif, $contenu))
{
   require("views/single.phtml");
}
else
{
   require("controllers/404.php");
}

?>