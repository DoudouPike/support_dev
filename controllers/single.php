<?php

$json = file_get_contents("html.json");
$stock = json_decode($json, true);

var_dump($stock);

if( isset($titre, $objectif, $contenu) )
{
   require("views/single.phtml");
}
else
{
   require("controllers/404.php");
}
?>