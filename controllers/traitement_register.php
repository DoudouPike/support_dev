<?php
	if (empty($_SESSION)) {
		require('controllers/404.php');
	}

	if (isset($_POST["register"])){
		$login = $_POST["pseudo"];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];

		if (!empty($_POST)) {
			if($_POST["password"] != $_POST["password2"]){
				$error = "Merci de saisir des mot de passe identiques";
			}
			else{
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

					header("Location: index.php?page=login");
					exit;
					// var_dump($res);
				}

			}
		}	
	}



?>				