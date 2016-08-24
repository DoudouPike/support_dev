<?php

$json = file_get_contents($_GET["lang"].".json");
$bdd = json_decode($json, true);

require("views/cours.phtml");

?>