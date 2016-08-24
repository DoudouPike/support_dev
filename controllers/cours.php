<?php

$json = file_get_contents($page.".json");
$stock = json_decode($json, true);

for ($i = 0; $i < sizeof($stock); $i++)
{ 
	if($stock[$i]["id"] == $_GET["id"])
	{
		$titre = $stock[$i]["titre"];
		$objectif = $stock[$i]["objectif"];
		$contenu = $stock[$i]["contenu"];
	}
}

if( isset($titre, $objectif, $contenu) )
{
	require("views/cours.phtml");
}
else
{
	require("controllers/404.php");
}
?>