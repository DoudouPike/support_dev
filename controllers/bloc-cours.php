<?php
	if(isset($_GET["lang"]) && in_array($_GET["lang"], $langAccess))
	{
		$lang = mysqli_real_escape_string($db, $_GET["lang"]);
		$req = "SELECT * FROM lessons WHERE lang = '".$lang."'";
		$thisDb = mysqli_query($db, $req);
		while($thisDbTab = mysqli_fetch_assoc($thisDb))
		{	
		$id = intval($thisDbTab["id"]);
		$title = mysqli_real_escape_string($db, $thisDbTab["title"]);
			if(isset($_SESSION["admin"]))
			{
				require("views/bloc-cours_admin.phtml");
			}
			else
			{
				require("views/bloc-cours.phtml");
			}
		}
	}
	else
	{
		require("controllers/404.php");
	}
?>