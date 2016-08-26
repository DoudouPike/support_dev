<?php

var_dump($date);

if(isset($_POST["choixLangage"], $_POST["choixCategorie"], $_POST["titre"], $_POST["objectif"], $_POST["textBox"])){

	$titre = $_POST["titre"];
	$contenu = $_POST["textBox"];
	$objectif = $_POST["objectif"];
	$langage = $_POST["choixLangage"];
	$categorie = $_POST["choixCategorie"];

	$res = mysqli_query($db, "INSERT INTO lessons (lang, `category`, `date`, `title`, `goal`, `content`) VALUES ('".$langage."', '".$categorie."', CURRENT_DATE(), '".$titre."', '".$objectif."', '".$contenu."')");

	if($res == false){
		if (mysqli_errno($db) == 1062)
			$error = "Ce titre existe déjà";
		else
			$error = 'Internal server error';
		var_dump($error);
	}
	else{

		header("Location: index.php?page=cours&lang=$langage");
		exit;
		// var_dump($res);
	}

	var_dump($_POST);
	// var_dump($_POST['choixLangage']);
	// var_dump($_POST['choixCategorie']);
}

?>				