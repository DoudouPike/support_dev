<?php

if(isset($_POST["id"], $_POST["titre"], $_POST["contenu"], $_POST["objectif"], $_POST["choixLangage"], $_POST["choixCategorie"])){

	$id = $_POST["id"];
	$titre = $_POST["titre"];
	$contenu = $_POST["contenu"];
	$objectif = $_POST["objectif"];
	$langage = $_POST["choixLangage"];
	$categorie = $_POST["choixCategorie"];

	if(!empty($titre) && !empty($contenu) && !empty($objectif) && !empty($langage) && !empty($categorie)){

		$file = $langage.'.json';
		$json = file_get_contents($file);
		$bdd = json_decode($json, true);
		$encodageJson = true;

		for ($j = 0; $j < sizeof($bdd); $j++){
			
			if ($bdd[$j]['titre'] === $titre) {
				$encodageJson = false;
				var_dump("Ce titre est déjà existant");
			}
		}

		if($encodageJson){
			var_dump("OK");	
			array_push($bdd, array('id' => $id, 'titre' => $titre, 'contenu' => $contenu, 'objectif' => $objectif, 'categorie' => $categorie, 'langage' => $langage));

			$json_data = json_encode($bdd); 
			file_put_contents($file, $json_data);
		}

	}
	else{
		$error = "Veuillez saisir tous les champs";
	}

		// header("Location: index.php?page=accueil");
		// exit;
		var_dump($_POST);
		// var_dump($_POST['choixLangage']);
		// var_dump($_POST['choixCategorie']);
}

?>




				