<?php
	$langAccess = ["html", "css", "php", "js"];
	if(isset($_GET["lang"]) && in_array($_GET["lang"], $langAccess))
	{
		$lang = mysqli_real_escape_string($db, $_GET["lang"]);
		$lang = strtoupper($lang);
		require("views/cours.phtml");
	}
	else
	{
		$error404 = "psk t tro con lol";
		require("controllers/404.php");
	}
?>