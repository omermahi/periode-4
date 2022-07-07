<?php
require_once "rechthoek.php";


$berekening =      new Rechthoek(10,12);



echo $berekening->toonTerug();
echo "<br>";
echo "De omtrek van een rechthoek met lengte ". $berekening->getLengte() . "en breedte" . $berekening->getBreedte(). "=" . $berekening->berekenOmtrek();
echo "<br>";
echo "De oppervlakte van een rechthoek met lengte" . $berekening->getLengte() . "en breedte" . $berekening->getBreedte(). "=" . $berekening->berekenOppervlakte();
?>