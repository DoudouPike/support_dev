<?php

if(empty($bdd))
{
	$titre = "";
	$error = "Aucun cours à afficher...";
}
else
{
	$count = 0;
	while($count < sizeof($bdd))
	{
		$thisbdd = $bdd[$count];
		if(in_array("intro", $thisbdd))
		{
			$categorie = "Introduction";
			$id = $bdd[$count]["id"];
			$title = $bdd[$count]["title"];
			$objectif = $bdd[$count]["objectif"];
			$contenu = $bdd[$count]["contenu"];

		}

		$count++;
	}

	/*for($i = 0; $i < sizeof($bddIntro); $i++)
	{
		$titre = $bddIntro[$i]["titre"];
		
		require("views/bloc-cours.phtml");
	}

	if($bdd[] = "step1")
	{
		for($i = 0; $i < sizeof($bddStep1); $i++)
		{
			$titre = $bddStep1[$i]["titre"];
		}	
	}*/
}
require("views/bloc-cours.phtml");


?>