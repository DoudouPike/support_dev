<?php
	if(isset($_POST["author"], $_POST["content"]))
	{
		$author = mysqli_real_escape_string($db, $_POST["author"]);
		$comment = mysqli_real_escape_string($db, $_POST["content"]);
		$idLesson = mysqli_real_escape_string($db, $_POST["idLesson"]);

		if(empty($author) || empty($comment))
		{
			$error = "Merci de compléter tous les champs...";
		}
		elseif(!ctype_digit($idLesson))
		{
			require("controllers/404.php");
		}
		else
		{
			$req = "INSERT INTO comments (author, content, date, lesson) VALUES ('".$author."', '".$comment."', CURDATE(), '".$idLesson."')";
			$res = mysqli_query($db, $req);
		}
	}




?>