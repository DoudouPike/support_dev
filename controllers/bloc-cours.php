<?php
	$langAccess = ["html", "css", "php", "js"];
	if(isset($_GET["lang"]) && in_array($_GET["lang"], $langAccess))
	{
		$catAccess = [0,1,2,3];
		if(isset($_GET["cat"]) && in_array($_GET["cat"], $catAccess))
		{
			$lang = mysqli_real_escape_string($db, $_GET["lang"]);
			$cat = mysqli_real_escape_string($db, $_GET["cat"]);

			$req = "SELECT id, title FROM lessons WHERE lang = '".$lang."' AND category = ".$cat."";
			$res = mysqli_query($db, $req);

			if($cat == 0)
			{
				$category = "Introduction";
			}
			if($cat = 1)
			{
				$category = "Premiers pas";
			}
			if($cat = 2)
			{
				$category = "Connaissances générales";
			}
			if($cat = 3)
			{
				$category = "Aller plus loin";
			}

			while($blocCoursTab = mysqli_fetch_assoc($res))
			{	
				$id = $blocCoursTab["id"];
				$title = $blocCoursTab["title"];

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
	}

	else
	{
		require("controllers/404.php");
	}
?>