<?php

$json = file_get_contents($_GET["lang"].".json");
$bdd = json_decode($json, true);

$bddIntro = $bdd["intro"];
$bddStep1 = $bdd["step1"];

var_dump($bdd);

require("views/cours.phtml");

?>