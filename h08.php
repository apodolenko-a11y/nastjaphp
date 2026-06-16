<?php
// Nimed
header('Content-Type: text/html; charset=utf-8');
echo "<h2>Nimed</h2>";
// koosta vähemalt 8 nimega massiiv
$nimed = array("Mari", "Kati", "Liis", "Laura", "Anni", "Eve", "Kadri", "Merle");

// kuva print_r() funktsiooni abil kõik nimed
echo "<pre>";
print_r($nimed);

echo "</pre>";
// väljasta tüdrukute nimekirjast eraldi esimesed 3 nime
echo "Esimesed 3 nime: " . $nimed[0] . ", " . $nimed[1] . ", " . $nimed[2] . "<br>";
// väljasta eraldi viimane nimi
echo "Viimane nimi: " . $nimed[7] . "<br>";



echo "<hr><h2>Hinded</h2>";
$hinded = [5, 4, 3, 5, 4, 5, 2, 5, 4, 3, 5, 4, 5, 2];

// arvuta hinnete summa kasutades tsüklit (ilma array_sum() funktsioonita)
$hinnete_summa = 0;
foreach ($hinded as $hinne) {
    $hinnete_summa = $hinnete_summa + $hinne;
}
echo "Hinnete summa: " . $hinnete_summa . "<br>";

// loenda, mitu hinnet on massiivis (ilma count() funktsioonita)
$hinnete_arv = 0;
foreach ($hinded as $hinne) {
    $hinnete_arv = $hinnete_arv + 1;
}

echo "Mitu hinnet on massiivis: " . $hinnete_arv . "<br>";

// kuva kõik viied
echo "Kõik viied: ";
foreach ($hinded as $hinne) {
    if ($hinne == 5) {
        echo $hinne . " ";
    }
}
echo "<br>";


echo "<hr><h2>Temperatuurid</h2>";
$temperatuurid = [18, 21, 19, 23, 25, 22, 20];

// leia suurim temperatuur ilma max() funktsioonita
$suurim_t = $temperatuurid[0];
foreach ($temperatuurid as $t) {
    if ($t > $suurim_t) {
        $suurim_t = $t;
    }
}
echo "Suurim temperatuur: " . $suurim_t . "<br>";

// leia väikseim temperatuur ilma min() funktsioonita
$vaikseim_t = $temperatuurid[0];
foreach ($temperatuurid as $t) {
    if ($t < $vaikseim_t) {
        $vaikseim_t = $t;
    }
}
echo "Väikseim temperatuur: " . $vaikseim_t . "<br>";

// arvuta keskmine temperatuur
$t_summa = 0;
$t_kogus = 0;
foreach ($temperatuurid as $t) {
    $t_summa = $t_summa + $t;
    $t_kogus = $t_kogus + 1;
}
$t_keskmine = $t_summa / $t_kogus;
echo "Keskmine temperatuur: " . round($t_keskmine, 1) . "<br>";

// kuva ainult temperatuurid, mis on üle 20 kraadi
echo "Üle 20 kraadi on: ";
foreach ($temperatuurid as $t) {
    if ($t > 20) {
        echo $t . " ";
    }
}
echo "<br>";


echo "<hr><h2>Pildid</h2>";
$pildid = array("prentice.jpg", "freeland.jpg", "peterus.jpg", "devlin.jpg", "gabriel.jpg", "pete.jpg");

// kuva massiivist kolmas pilt
echo "Kolmas pilt: " . $pildid[2] . "<br>";
echo "<img src='img/" . $pildid[2] . "' width='60'><br><br>";

// kuva massiivist kõik pildid
echo "Kõik pildid:<br>";
foreach ($pildid as $pilt) {
    echo "<img src='img/" . $pilt . "' width='60' style='margin-right: 5px;'>";
}
echo "<br>";

echo "<hr><h2>Õpilane</h2>";
$opilane = [
    "nimi" => "Mari",
    "vanus" => 17,
    "eriala" => "IT süsteemid"
];

// kuva õpilase nimi ka kuva vanus
echo "Õpilase nimi: " . $opilane["nimi"] . "<br>";
echo "Õpilase vanus: " . $opilane["vanus"] . "<br><br>";

// kuva kõik andmed foreach tsükliga
echo "Kõik andmed foreach tsükliga:<br>";
foreach ($opilane as $voti => $vaartus) {
    echo $voti . ": " . $vaartus . "<br>";
}

echo "<hr><h2>Punktid</h2>";
$punktid = [
    "Mari" => 85,
    "Jüri" => 72,
    "Kati" => 94,
    "Uku" => 61
];

// kuva kõik õpilased koos punktisummadega
foreach ($punktid as $nimi => $p) {
    echo $nimi . " => " . $p . "<br>";
}
echo "<br>";

// leia suurima punktisummaga õpilane ilma max() funktsioonita
$suurim_punkt = 0;
$parim_opilane = "";
foreach ($punktid as $nimi => $p) {
    if ($p > $suurim_punkt) {
        $suurim_punkt = $p;
        $parim_opilane = $nimi;
    }
}
echo "Suurima punktisummaga õpilane: " . $parim_opilane . " (" . $suurim_punkt . "p)<br>";

// leia keskmine punktisumma ilma array_sum() funktsioonita
$p_summa = 0;
$p_arv = 0;
foreach ($punktid as $nimi => $p) {
    $p_summa = $p_summa + $p;
    $p_arv = $p_arv + 1;
}
echo "Keskmine punktisumma: " . ($p_summa / $p_arv) . "<br>";

// kuva kõik õpilased, kelle punktisumma on üle 80
echo "Õpilased üle 80 punkti: ";
foreach ($punktid as $nimi => $p) {
    if ($p > 80) {
        echo $nimi . " ";
    }
}
echo "<br>";


echo "<hr><h2>Veebipoe laoseis</h2>";
$tooted = [
    ["Monitor", 199, 5],
    ["Klaviatuur", 49, 0],
    ["Hiir", 25, 20],
    ["Kõlarid", 79, 8],
    ["Veebikaamera", 59, 10],
    ["Printer", 149, 4],
    ["Sülearvuti", 899, 3],
    ["Lauaarvuti", 749, 6],
    ["USB mälupulk", 15, 30],
    ["Väline kõvaketas", 99, 0],
    ["SSD ketas", 89, 15],
    ["Ruuter", 69, 9],
    ["Võrgukaabel", 8, 50],
    ["Mikrofon", 45, 0],
    ["Peakomplekt", 39, 18],
    ["Projektor", 499, 2],
    ["Graafikalaud", 129, 5],
    ["Skänner", 179, 3],
    ["Nutitelefon", 699, 7],
    ["Tahvelarvuti", 349, 4]

];

// Andmete järjekord
echo "<table border='1' style='border-collapse: collapse;' cellpadding='5'>";
echo "<tr><th>Nimi</th><th>Hind</th><th>Kogus</th></tr>";
foreach ($tooted as $toode) {
    echo "<tr><td>" . $toode[0] . "</td><td>" . $toode[1] . "</td><td>" . $toode[2] . "</td></tr>";
}
echo "</table><br>";

// leia kõige kallim toode (ilma massiivi funktsioonita)
$kalleim_hind = 0;
$kalleim_nimi = "";
foreach ($tooted as $toode) {
    if ($toode[1] > $kalleim_hind) {
        $kalleim_hind = $toode[1];
        $kalleim_nimi = $toode[0];
    }
}
echo "Kõige kallim toode: " . $kalleim_nimi . " (" . $kalleim_hind . " EUR)<br>";

// kuva ainult tooted, mis on otsas
echo "Otsas olevad tooted: ";
foreach ($tooted as $toode) {
    if ($toode[2] == 0) {
        echo $toode[0] . ", ";
    }
}


echo "<br>";
// leia, mitu toodet kokku laos on (ilma massiivi funktsioonita)


$kokku_laos = 0;
foreach ($tooted as $toode) {
    $kokku_laos = $kokku_laos + $toode[2];
}

echo "Kokku laos tooteid: " . $kokku_laos . " tk<br>";


?>