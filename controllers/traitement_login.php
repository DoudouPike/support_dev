<?php
$loginAdmin = "admin";
$mdpAdmin = "admin";


if(isset($_POST["name"], $_POST["pwd"]))
{

	$name = $_POST["name"];
	$pwd = $_POST["pwd"];

	if(empty($name) || empty($pwd))
	{
		$error = "Veuillez compléter tous les champs...";
	}
	else
	{
		/*$json = file_get_contents("stockage.json");
		$stock = json_decode($json, true);

		for($i = 0; $i < sizeof($stock); $i++)
		{ 
			if($namelogin != $stock[$i]["name"] || password_verify($pwdlogin, $stock[$i]["pwd"]) == false)
			{
				$error = "L'identifiant ou le mot de passe est incorrecte !";
			}

			elseif($namelogin == $stock[$i]["name"] && password_verify($pwdlogin, $stock[$i]["pwd"]))
			{
				$_SESSION["user"] = $namelogin;

				header("Location: index.php?page=home");
				exit;	
			}

			else
			{
				var_dump("ERROR !");
			}
		}*/	
		if($name != $loginAdmin && $pwd != $mdpAdmin)
		{
			$error = "L'identifiant ou le mot de passe est incorrecte !";
		}

		else
		{
			$_SESSION["admin"] = $name;

			header("Location: index.php");
			exit;	
		}
	}
}

?>