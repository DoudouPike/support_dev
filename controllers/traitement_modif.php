<?php
if(isset($_POST["titre"], $_POST["objectif"], $_POST["textBox"]))
{
	$titre = mysqli_real_escape_string($db, $_POST["titre"]);
	$objectif = mysqli_real_escape_string($db, $_POST["objectif"]);
	$textBox = mysqli_real_escape_string($db, $_POST["textBox"]);

	if(empty($titre) || empty($objectif) || empty($textBox))
	{
		$error = "Merci de compléter tous les champs ...";
	}
	else
	{
		$id = $_GET["id"];
		$req = "UPDATE lessons SET title = '".$titre."', goal = '".$objectif."', content = '".$textBox."' WHERE id = ".$id;
		$thisDb = mysqli_query($db, $req);

		if($res == false)
		{
			if (mysqli_errno($db) == 1062)
				$error = "Ce titre existe déjà";

			else
				$error = 'Internal server error';
		}
		header("Location: index.php?page=single&titre='".$titre."'");
		exit;
	}
	
}

?>