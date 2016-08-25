<?php

$json = file_get_contents("html.json");
$bdd = json_decode($json, true);


if( isset($titre, $objectif, $contenu) )
{
   require("views/single.phtml");
}
else
{
   require("controllers/404.php");
}
?>