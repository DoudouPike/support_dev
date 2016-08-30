<?php
session_start();
$db = mysqli_connect("localhost", "root", "troiswa", "support_dev");
$error = "";
$error404 = "";
$page = "home";

$access = ["home", "login", "logout", "cours", "single", "404", "register"];
$accessAdmin = ["home", "login", "logout", "cours", "single", "404", "register", "creation", "modif", "delete"];
if(isset($_SESSION["admin"]))
{
	if(isset($_GET["page"]) && in_array($_GET["page"], $accessAdmin))
	{
		$page = $_GET["page"];
	}	
}
else
{
	if(isset($_GET["page"]) && in_array($_GET["page"], $access))
	{
		$page = $_GET["page"];
	}	
}

$traitementList = ["creation", "login", "modif", "delete", "register"];
if(in_array($page, $traitementList))
{
	require("controllers/traitement_".$page.".php");
}
require("controllers/skel.php");
?>