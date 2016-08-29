<?php

	if(isset($_GET['id'])){
		$idSaisi = intval($_GET['id']);
		$select_title = mysqli_query($db, "SELECT id, title, lang FROM lessons WHERE id = '".$idSaisi."'");
		$title = mysqli_fetch_assoc($select_title);
		$title_id = $title['id'];
		$title_delete = $title['title'];
		$title_lang = $title['lang'];

		if(empty($idSaisi)){
			header("Location: index.php?page=404");
			exit;
		}
		else if (!$title_id) {
			header("Location: index.php?page=404");
			exit;
		}

		if(isset($_POST["delete"])){
			$res = mysqli_query($db, "DELETE FROM lessons WHERE id = '".$idSaisi."'");

			header("Location: index.php?page=cours&lang=$title_lang");
			exit;
		}
	}
?>