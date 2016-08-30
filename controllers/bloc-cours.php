<?php
	if(isset($_GET["lang"]) && in_array($_GET["lang"], $langAccess))
	{
		$lang = mysqli_real_escape_string($db, $_GET["lang"]);
		$category = mysqli_real_escape_string($db, $_GET["cat"])

		$req = "SELECT id, title FROM lessons WHERE lang = '".$lang."' ORDER BY category";

		$res = mysqli_query($db, $req);
		while($blocCoursTab = mysqli_fetch_assoc($res))
		{	
			$id = $blocCoursTab["id"];
		
			$category
			
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
?>