<?php	
if(isset($_GET["id"]) && !empty($_GET["id"]))
{
	$id = intval($_GET["id"]);

	$req = "SELECT title,goal,content FROM lessons WHERE id = '".$id."'";
	$thisDb = mysqli_query($db, $req);

	$thisDbTab = mysqli_fetch_assoc($thisDb);
	if($thisDbTab)
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