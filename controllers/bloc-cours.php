<?php

if($bdd[] = "intro")
{
	for($i = 0; $i < sizeof($bddIntro); $i++)
	{
		$titre = $bddIntro[$i]["titre"];
		
		require("views/bloc-cours.phtml");
	}	
}

if($bdd[] = "step1")
{
	for($i = 0; $i < sizeof($bddStep1); $i++)
	{
		$titre = $bddStep1[$i]["titre"];
		
		require("views/bloc-cours.phtml");
	}	
}


?>