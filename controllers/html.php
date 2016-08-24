<?php

$json = file_get_contents("html.json");
$stock = json_decode($json, true);

var_dump($stock);

$titre = $stock[0]["titre"];


require("views/html.phtml");
?>