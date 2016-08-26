<?php
if(isset($_POST["titre"], $_POST["objectif"], $_POST["textBox"]))
{
	$titre = $_POST["titre"];
	$objectif = $_POST["objectif"];
	$textBox = $_POST["textBox"];

	if(empty($titre) || empty($objectif) || empty($textBox))
	{
		$error = "Merci de compléter tous les champs ...";
	}
	else
	{
		var_dump($_POST);
		$id = $_GET["id"];
		$req = "UPDATE lessons SET title = '".$titre."', goal = '".$objectif."', content = '".$textBox."', date_last = CURRENT_DATE() WHERE id = $id";
		$thisDb = mysqli_query($db, $req);

		header("Location: index.php?page=single&titre=$titre");
		exit;
	}
	
}

?>