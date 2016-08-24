<?php

<<<<<<< HEAD
$json = file_get_contents($_GET["lang"].".json");
$bdd = json_decode($json, true);
=======
$json = file_get_contents($page.".json");
$stock = json_decode($json, true);
>>>>>>> 62bec9a5717b0fe900c54aec9ff2e688c05f3b53

$bddIntro = $bdd["intro"];
$bddStep1 = $bdd["step1"];

var_dump($bdd);

require("views/cours.phtml");

?>