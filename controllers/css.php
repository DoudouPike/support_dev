<?php
$json = file_get_contents($_GET["page"].".json");
$stock = json_decode($json);

require("views/css.phtml");
?>