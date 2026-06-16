<?php
// Kasutaja lisab vormi nime, seda näiteks suured ja väikesed tähed läbisegi. Sina kood tervitab teda kenasti nimepidi, kus nimi algab suure algustähega. Näiteks: sisend–>mARiO; väljund–>Tere, Mario!
$nimi = "mARiO";
echo "Tere, " . ucfirst(strtolower($nimi)) . "!";
echo "<br>";

// Kuna on teada, et PHP käsitleb teksti kui massiivi, siis peaks saama seda tsükli abil nö. tükeldada. Ülesandeks on etteantud teksti iga tähe järgi lisada punkt. Näiteks: sisend–>stalker; väljund–>S.T.A.L.K.E.R.
$sona = "stalker";
$tulemus = "";

for ($i = 0; $i < strlen($sona); $i++) {
    $tulemus .= strtoupper($sona[$i]) . "."; 
}
echo $tulemus;
echo "<br>";
// Koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega. Näiteks: sisend–>Sa oled täielik noob; väljund–>Sa oled täielik ***
$tekst = "Sa oled täielik noob";
echo str_replace("noob", "***", $tekst); 
echo "<br>";
// Kasutajalt saadud eesnime ja perenime põhjal luuakse talle email lõpuga @hkhk.edu.ee. Kusjuures täpitähed asendatakse ä->a, ö->o, ü->y, õ->o ja kogu email on väikeste tähtedega Näiteks: sisend–>Ülle ja Doos; väljund–>ylle.doos@hkhk.edu.ee
$eesnimi = "Ülle";
$perenimi = "Doos";
$eesnimi = strtolower($eesnimi);
$perenimi = strtolower($perenimi);
$eesnimi = str_replace(array("ä", "ö", "ü", "õ"), array("a", "o", "y", "o"), $eesnimi);
$perenimi = str_replace(array("ä", "ö", "ü", "õ"), array("a", "o", "y", "o"), $perenimi);
$email = $eesnimi . "." . $perenimi . "@hkhk.edu.ee"; 
echo $email;



?>