<?php

if(isset($_POST["titre"], $_POST["contenu"]))
{

	$titre = $_POST["titre"];
	$contenu = $_POST["contenu"];

	if(empty($titre) || empty($contenu))
	{
		$error = "Veuillez compléter tous les champs...";
	}
	else
	{
		
		var_dump('expression');
	}
}

?>