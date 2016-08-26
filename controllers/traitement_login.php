<?php


if(isset($_POST["name"], $_POST["pwd"]))
{
	$res = mysqli_query($db, "SELECT login,password FROM users WHERE login = '".$_POST["name"]."'");
	
	while ($user = mysqli_fetch_assoc($res))
	{
		$loginAdmin = $user['login'];
		$mdpAdmin = $user['password'];
	}

	$name = $_POST["name"];
	$pwd = $_POST["pwd"];

	if(empty($name) || empty($pwd))
	{
		$error = "Veuillez compléter tous les champs...";
	}
	else
	{
		if($name != $loginAdmin && md5($pwd) == $user['password'])
		{
			$error = "L'identifiant ou le mot de passe est incorrecte !";
		}
		else
		{
			$_SESSION["admin"] = $name;

			header("Location: index.php?page=home");
			exit;
		}
	}
}

?>