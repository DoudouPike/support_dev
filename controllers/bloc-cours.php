<?php

$lang = $_GET["lang"];
$titleLang = "SELECT title FROM lessons WHERE lang = '".$lang."'";

$dbLang = mysqli_query($db, $titleLang);

while($titleList = mysqli_fetch_assoc($dbLang))
{	
	$title = $titleList["title"];
	if(isset($_SESSION["admin"]))
	{
		require("views/bloc-cours_admin.phtml");
	}
	else
	{
		require("views/bloc-cours.phtml");
	}
}

?>