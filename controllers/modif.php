<?php	
	if(isset($_GET["id"]) && !empty($_GET["id"]))
	{
		$id = intval($_GET["id"]);

		$req = "SELECT title,goal,content FROM lessons WHERE id = '".$id."'";
		$res = mysqli_query($db, $req);

		$articleTab = mysqli_fetch_assoc($res);
		if($articleTab)
		{
			require("views/modif.phtml");
		}
		else
		{
			require("controllers/404.php");
		}
	}
	else
	{
		require("controllers/404.php");
	}			
?>