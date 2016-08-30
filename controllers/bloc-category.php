<?php
	$langAccess = ["html", "css", "php", "js"];
	if(isset($_GET["lang"]) && in_array($_GET["lang"], $langAccess))
	{
		$lang = mysqli_real_escape_string($db, $_GET["lang"]);

		$req = "SELECT category FROM lessons WHERE lang = '".$lang."' ORDER BY category";

		$res = mysqli_query($db, $req);
		
		$intro = false;
		$premierPas = false;
		$generale = false;
		$plusLoin = false;

		while($blocCoursTab = mysqli_fetch_assoc($res))
		{
			if ($blocCoursTab["category"] == 0){
				$intro = true;
			}
			if ($blocCoursTab["category"] == 1){
				$premierPas = true;
			}
			if ($blocCoursTab["category"] == 2){
				$generale = true;
			}	
			if ($blocCoursTab["category"] == 3){
				$plusLoin = true;
			}	
		}

		if($intro)
		{
			$cat = 0;
			$category = "Introduction";
			require("views/bloc-category.phtml");
		}
		if($premierPas)
		{
			$cat = 1;
			$category = "Premiers pas";
			require("views/bloc-category.phtml");
		}
		if($generale)
		{
			$cat = 2;
			$category = "Connaissances générales";
			require("views/bloc-category.phtml");
		}
		if($plusLoin)
		{
			$cat = 3;
			$category = "Aller plus loin";
			require("views/bloc-category.phtml");
		}

	}
	else
	{
		require("controllers/404.php");
	}
?>