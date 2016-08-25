<?php
session_start();
$db = mysqli_connect("localhost", "root", "troiswa", "support_dev");

$error = "";
$page = "home";
$access = ["home", "login", "logout", "cours", "single", "creation"]; //ajouter les autres pages

if(isset($_GET["page"]) && in_array($_GET["page"], $access))
{
	$page = $_GET["page"];
}

$traitementList = ["creation", "login"];

if(in_array($page, $traitementList))
{
	require("controllers/traitement_" .$page. ".php");
}

require("controllers/skel.php");
?>