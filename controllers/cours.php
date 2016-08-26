<?php
	$select_lang = mysqli_query($db, "SELECT category FROM lessons WHERE lang = '".$_GET["lang"]."'");
	$lang = mysqli_fetch_assoc($select_lang);

	$title_lang = $lang['category'];
	require("views/cours.phtml");
?>