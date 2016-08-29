<?php

if(isset($_POST["name"], $_POST["pwd"]))
{
	$name = $_POST["name"];
	$pwd = $_POST["pwd"];

	var_dump($_POST);

	if(empty($name) || empty($pwd))
	{
		$error = "Veuillez compléter tous les champs...";
	}
	else
	{
		$req = "SELECT * FROM users WHERE login = '".$name."'";
		$res = mysqli_query($db, $req);

		while($adminTab = mysqli_fetch_assoc($res))
		{	
			$idAdmin = $adminTab['id'];
			$loginAdmin = $adminTab['login'];
			$pwdAdmin = $adminTab['password'];
		}

		if(isset($idAdmin, $loginAdmin, $pwdAdmin))
		{
			if($name != $loginAdmin && md5($pwd) == $pwdAdmin)
			{
				$error = "L'identifiant ou le mot de passe est incorrecte...";
			}
			else
			{
				$_SESSION["id"] = $idAdmin;
				$_SESSION["admin"] = $loginAdmin;

				header("Location: index.php?page=home");
				exit;
			}
		}
	}
}

?>