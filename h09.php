<?php
$nimi = "Mari";
echo "Jou, " . ucfirst(strtolower($nimi)) . "!";
echo "<br>";

$sona = "hobune";
$tulemus = "";

for ($i = 0; $i < strlen($sona); $i++) {
    $tulemus .= strtoupper($sona[$i]) . ".";
}

echo $tulemus;
echo "<br>";

$tekst = "Anna mulle vett";
echo str_replace("vett", "****", $tekst);
echo "<br>";

$eesnimi = "Nimfa";
$perekonnanimi = "Podolenko";

$eesnimi = strtolower($eesnimi);
$perenimi = strtolower($perenimi);

$eesnimi = str_replace(array("ä", "ö", "ü", "õ"), array("a", "o", "y", "o"), $eesnimi);
$perekonnanimi = str_replace(array("ä", "ö", "ü", "õ"), array("a", "o", "y", "o"), $perekonnanimi);

$email = $eesnimi . "." . $perekonnanimi . "@hkhk.edu.ee";
echo $email;

?>