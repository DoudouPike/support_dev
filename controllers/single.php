<?php
	if(isset($_GET["id"]) && !empty($_GET["id"]))
	{
		$idPage = mysqli_real_escape_string($db, $_GET["id"]);
		$req = "SELECT id, title, goal, content, DATE_FORMAT(date, '%d-%m-%Y') date, DATE_FORMAT(date_last, '%d-%m-%Y à %H:%i:%s')date_last FROM lessons WHERE id = '".$idPage."'";
		$thisDb = mysqli_query($db, $req);
		$single = mysqli_fetch_assoc($thisDb);
		$id = $single["id"];
		if(isset($_SESSION["admin"]))
		{
			require("views/single_admin.phtml");
		}
		else{
			require("views/single.phtml");
		}
	}
	else
	{
		require("controllers/404.php");
	}
?>