<?php	
if(isset($_GET["id"]) && !empty($_GET["id"]))
{
	$id = mysqli_real_escape_string($db, $_GET["id"]);
	$req = "SELECT id FROM lessons WHERE id='" .$id. "'";
	$ids = mysqli_query($db, $req);
	$idsTab = mysqli_fetch_assoc($ids);
	if($id == $idsTab["id"])
	{
		$req = "SELECT title,goal,content FROM lessons WHERE id = '".$id."'";
		$thisDb = mysqli_query($db, $req);

		$thisDbTab = mysqli_fetch_assoc($thisDb);

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