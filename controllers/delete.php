<?php
	if(isset($_SESSION["admin"]))
	{
		$idSaisi = $_GET['id'];
		$select_title = mysqli_query($db, "SELECT title, lang FROM lessons WHERE id = '".$idSaisi."'");
		$title = mysqli_fetch_assoc($select_title);
		$title_delete = $title['title'];
		$title_lang = $title['lang'];
		require('views/delete.phtml');
	}
	else
	{
		require("controllers/404.php");
	}
?>