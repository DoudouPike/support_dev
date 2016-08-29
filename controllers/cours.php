<?php
	$langAccess = ["html", "css", "php", "js"];

	if(isset($_GET["lang"]) && in_array($_GET["lang"], $langAccess))
	{
		$lang = mysqli_real_escape_string($db, $_GET["lang"]);
		$req = "SELECT category FROM lessons WHERE lang = '$lang'";
		$select_lang = mysqli_query($db, $req);
		
		$lang = mysqli_fetch_assoc($select_lang);
		$title_lang = $lang['category'];


		if(isset($_GET["lang"]) && in_array($_GET["lang"], $langAccess))
		{
			$lang = mysqli_real_escape_string($db, $_GET["lang"]);
			$req = "SELECT category FROM lessons WHERE lang = '".$lang."'";
			$select_lang = mysqli_query($db, $req);
			
			$lang = mysqli_fetch_assoc($select_lang);
			$title_lang = $lang['category'];

			require("views/cours.phtml");
		}
		else
		{
			require("controllers/404.php");
		}
	}
?>