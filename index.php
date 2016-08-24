
<<<<<<< HEAD
<?php
session_start();
=======
session_start();

>>>>>>> b5277ce1f486f9ab5a96d6abe3435bd7e55d9e88
$error = "";
$page = "home";
$access = ["home", "login", "logout", "html", "css", "js", "php", "cours"]; //ajouter les autres pages
<<<<<<< HEAD
=======

>>>>>>> b5277ce1f486f9ab5a96d6abe3435bd7e55d9e88
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