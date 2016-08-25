<?php

if(isset($titre, $objectif, $contenu))
{
   require("views/single.phtml");
}
else
{
   require("controllers/404.php");
}
?>