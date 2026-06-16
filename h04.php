<?php
// Genereeri – loo arvud 1-100 – loo pärast iga 10 arvu reavahetus – lisa iga arvu järele punkt (N: 1. 2. 3. jne…)
for ($i = 1; $i <= 100; $i++) {
    echo $i . ". ";


    if ($i % 10 == 0) {
        echo "<br>";

    }
}
echo "<br>";

// Rida – koosta tärnidest horisontaalne rida

for ($i = 1; $i <= 10; $i++) {

    echo "*";
}


echo "<br><br>";

// Rida II – koosta tärnidest vertikaalne rida
for ($i = 1; $i <= 10; $i++) {
    echo "*" . "<br>";
}
echo "<br>";


// Ruut – loo tsükli abil tärnidest ruut, mille suuruse lisab kasutaja läbi veebivorm
$razmer =5; 
for ($rjada = 1; $rjada <= $razmer; $rjada++) {
    for ($kolonka = 1; $kolonka <= $razmer; $kolonka++) {
        echo "* ";
    }

    echo "<br>"; 
}

echo "<br>";
// Kahanev – väljasta paarisarvud 10-1
for ($i = 10; $i >= 2; $i = $i - 2) {
    echo $i . " ";
}


echo "<br><br>";


// Kolmega jagunevad – tekita arvud 1-100, aga kuva kolmega jagunevad arvud (N: 3, 6, 9 jne.)
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . ", ";
    }
}
echo "<br><br>";

// Kolmnurk – loo tärnidest järgmine kujund
for ($rjada = 1; $rjada <= 5; $rjada++) {
    for ($zvezda = 1; $zvezda <= $rjada; $zvezda++) {
        echo "*";
    }
    echo "<br>";
}



echo "<br>"


// 99 limonaadipudelit seinal – loo programm, mis kuvab laulu sõnu alates 99 pudelist kuni 1 pudelini. Iga salm peab olema järgmises vormingus:

for ($pudelid = 99; $pudelid >= 1; $pudelid--) {
    $sledujusaja = $pudelid - 1;
    echo $pudelid . " limonaadipudelit seinal,<br>";
    echo $pudelid . " limonaadipudelit.<br>";
    echo "Võta üks ära, anna edasi,<br>";
    echo $sledujusaja . " limonaadipudelit seinal.<br><br>";


}

// Klasside nimekiri – loo HTML <ol> loend klassidest 1 – 12. Iga element peab olema kujul 1. klass, 2. klass jne.
echo "<ol>";


for ($klass = 1; $klass <= 12; $klass++) {
    echo "<li>" . $klass . ". klass</li>";
}
echo "</ol>";
echo "<br>";
// Rippmenüü – loo <select> element kuudega Toode 1 – Toode 12.
echo "<select>";
for ($toode = 1; $toode <= 12; $toode++) {
    echo "<option>Toode " . $toode . "</option>";
}
echo "</select>";



?>
