<?php
if (isset($_POST["register"]))
{
	$login = mysqli_real_escape_string($db, $_POST["pseudo"]);
	$email = mysqli_real_escape_string($db, $_POST["email"]);
	$password = mysqli_real_escape_string($db, $_POST["password"]);
	$password2 = mysqli_real_escape_string($db, $_POST["password2"]);

	if(empty($login) || empty($email) || empty($password) || empty($password2))
	{
		$error = "Merci de compléter tous les champs...";
	}
	else
	{
		$req = "SELECT email FROM users";
		$emails = mysqli_query($db, $req);

		while($emailTab = mysqli_fetch_assoc($emails))
		{
			if($emailTab["email"] == $email)
			{
				$error = "Cet email est déjà utilisé";
			}
		}

		if($password != $password2)
		{
			$error = "Merci de saisir des mots de passe identiques";
		}
		else
		{
			$res = mysqli_query($db, "INSERT INTO users (login, `email`, `password`) VALUES ('$login', '$email', '$password')");
			// header("Location: index.php?page=login");
			// exit;
			var_dump(mysqli_errno($db));
			if($res == false){

				if (mysqli_errno($db) == 1062){
					$error = "Pseudo ou mail déjà existant";
					var_dump($error);
				}
				// else{
				// 	$error = 'weeeee';
				// 	var_dump($error);
				// }
			}
			else{

				// header("Location: index.php?page=login");
				// exit;
				// var_dump($res);
			}

		}
	}	
}



?>				