<?php
	if(isset($_SESSION["admin"]))
	{
		$id = $_GET["id"];
		$req = "SELECT title,goal,content FROM lessons WHERE id = '".$id."'";
		$thisDb = mysqli_query($db, $req);

		$thisDbTab = mysqli_fetch_assoc($thisDb);
		
		$titre = $thisDbTab["title"];
		$objectif = $thisDbTab["goal"];
		$contenu = $thisDbTab["content"];

		require("views/modif.phtml");
	}
	else
	{
		require("controllers/404.php");
	}
?>