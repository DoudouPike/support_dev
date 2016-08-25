<?php

if(empty($db))
{
	$titre = "";
	$error = "Aucun cours à afficher...";
	require("views/bloc-cours.phtml");
}
else
{
	$lang = $_GET["lang"];
	$titleLang = "SELECT title FROM lessons WHERE lang = '".$lang."'";

	$dbLang = mysqli_query($db, $titleLang);

	while($titleList = mysqli_fetch_assoc($dbLang))
	{
		var_dump($titleList);
		require("views/bloc-cours.phtml");
	}
	/*$count = 0;
	while($count < sizeof($bdd))
	{
		$thisbdd = $bdd[$count];

		if(in_array("intro", $thisbdd))
		{
			
			$id = $thisbdd["id"];
			$titre = $thisbdd["titre"];
			$objectif = $thisbdd["objectif"];
			$contenu = $thisbdd["contenu"];

			$urlTitre = urlencode($titre);

			//$categorie = "Introduction";
			require("views/bloc-cours.phtml");

		}
		elseif(in_array("step1", $thisbdd))
		{
			
			$id = $thisbdd["id"];
			$titre = $thisbdd["titre"];
			$objectif = $thisbdd["objectif"];
			$contenu = $thisbdd["contenu"];

			$urlTitre = urlencode($titre);
			//$categorie = "Step 1";
			require("views/bloc-cours.phtml");
		}
		$count++;
	}*/
}


?>