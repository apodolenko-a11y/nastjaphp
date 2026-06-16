<?php

// Parooli kontroll 
$parool = "minuhobune123";
if (strlen($parool) >= 8) {
    echo "parool on piisavalt pikk!";
} else {
    echo "Viga: parool peab olema vähemalt 8 tähemärki pikk!";
}


echo "<br><br>";


//Täisarvu kontroll 
$vanus = 16;

if (is_int($vanus)) {
    echo "Vanus on korrektne täisarv.";
} else {
    echo "Viga: Vanus peab olema täisarv!";
}
echo "<br><br>";


// 3. Kliendikaart 
$kliendi_nimi = "Mari";
$kliendi_vanus = "25"; 

if (is_string($kliendi_nimi) && is_numeric($kliendi_vanus)) {
    echo "kliendi andmed on korrektsed.";
} else {
    echo "Viga: nimi peab olema tekst ja vanus peab olema arv!";
}

echo "<br><br>";


// 4. Tooteinfo 
$toote_nimi = "Piim";
$toote_kogus = 5;
$toote_hind = 1.25;

if (is_string($toote_nimi) && is_numeric($toote_kogus) && is_float($toote_hind)) {
    echo "toote info on sisestatud õigesti.";
} else {
    echo "Viga: Toote andmetes on viga! Kontrolli nime, kogust ja hinda.";
}

?>