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