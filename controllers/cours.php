<?php

$json = file_get_contents($_GET["lang"].".json");
$bdd = json_decode($json, true);

$categorie = "Introduction";


for ($i = 0; $i < /* taille de la table[$i] */ ; $i ++) { 
	$categorie = ;
}
/* Si categorie = 0,
alors $categorie = "Introduction"*/

/* Si categorie = 1,
alors $categorie = "Step 1"*/
 
require("views/cours.phtml");

?>