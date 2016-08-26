<?php
	$select_title = mysqli_query($db, "SELECT title, lang FROM lessons WHERE id = '".$_GET["id"]."'");
	
	$title = mysqli_fetch_assoc($select_title);

	$title_delete = $title['title'];
	$title_lang = $title['lang'];

	if(isset($_POST["delete"])){
		$res = mysqli_query($db, "DELETE FROM lessons WHERE id = '".$_GET["id"]."'");

		header("Location: index.php?page=cours&lang=$title_lang");
		exit;
	}
?>