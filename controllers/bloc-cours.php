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
			
			$id = $thisbdd["id"];
			$titre = $thisbdd["titre"];
			$objectif = $thisbdd["objectif"];
			$contenu = $thisbdd["contenu"];

			//$categorie = "Introduction";
			require("views/bloc-cours.phtml");

		}
		elseif(in_array("step1", $thisbdd))
		{
			
			$id = $thisbdd["id"];
			$titre = $thisbdd["titre"];
			$objectif = $thisbdd["objectif"];
			$contenu = $thisbdd["contenu"];

			//$categorie = "Step 1";
			require("views/bloc-cours.phtml");
		}
		$count++;
	}
}


?>