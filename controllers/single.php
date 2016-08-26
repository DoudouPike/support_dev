<?php

$titlePage = urldecode($_GET["titre"]);
$req = "SELECT * FROM lessons WHERE title = '".$titlePage."'";
$thisDb = mysqli_query($db, $req);

$thisDbTab = mysqli_fetch_assoc($thisDb);

$titre = $titlePage;
$objectif = $thisDbTab["goal"];
$contenu = $thisDbTab["content"];
$d_creation = $thisDbTab["date"];
$d_modif = $thisDbTab["date_last"];

if(isset($titre, $objectif, $contenu))
{
   require("views/single.phtml");
}
else
{
   require("controllers/404.php");
}

?>