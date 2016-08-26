<?php

// if(empty($_SESSION)){
// 	header("Location: index.php?page=home");
// 	exit;
// }
var_dump($date);
// var_dump($date_post);

if(isset($_POST["titre"], $_POST["textBox"], $_POST["objectif"], $_POST["choixLangage"], $_POST["choixCategorie"])){

	$id = 0;
	$titre = $_POST["titre"];
	$contenu = $_POST["textBox"];
	$objectif = $_POST["objectif"];
	$langage = $_POST["choixLangage"];
	$categorie = $_POST["choixCategorie"];


$res = mysqli_query($db, "INSERT INTO lessons (lang, `category`, `date`, `title`, `goal`, `content`) VALUES ('".$langage."', '".$categorie."', CURRENT_DATE(), '".$titre."', '".$objectif."', '".$contenu."')");

	// $sql = $mysqli->query("INSERT INTO article (title, entry, date_entered) VALUES ('".$title."','".$entry."', NOW())");
	var_dump($res);
  // mysql_query($res);

	// 	while ($creation = mysqli_fetch_assoc($res))
	// {
	// 	var_dump($creation);
	// }
	// if(!empty($titre) && !empty($contenu) && !empty($objectif) && !empty($langage) && !empty($categorie)){

	// 	$file = $langage.'.json';
	// 	$json = file_get_contents($file);
	// 	$bdd = json_decode($json, true);
	// 	$intro = $bdd[$categorie];
		
		
		// $encodageJson = true;
		// for ($j = 0; $j < sizeof($intro); $j++){
			
		// 	if ($intro[$j]['titre'] === $titre) {
		// 		$encodageJson = false;
		// 		var_dump("Ce titre est déjà existant dans cette categorie");
		// 	}

		// 	if ($intro[$j]['id'] === $id) {
		// 		$encodageJson = false;
		// 		var_dump("Cet id est déjà utilisé dans cette categorie");
		// 	}
		// }


		// if($encodageJson){
		// 	var_dump("OK");

		// 	array_push($intro, array('id' => $id, 'titre' => $titre, 'textBox' => $contenu, 'objectif' => $objectif, 'categorie' => $categorie));


		// 	$bdd[$categorie] = $intro;
		// 	$json_data = json_encode($bdd); 
		// 	file_put_contents($file, $json_data);
		// }

	// }
	// else{
	// 	$error = "Veuillez saisir tous les champs";
	// 	var_dump($error);
	// }

		// header("Location: index.php?page=accueil");
		// exit;
		var_dump($_POST);
		// var_dump($_POST['choixLangage']);
		// var_dump($_POST['choixCategorie']);
}

?>




				