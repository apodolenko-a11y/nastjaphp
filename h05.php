<!-- Tervitus
koosta funktsioon, mis tervitab. Näiteks: “Tere päiksekesekene!” -->

<?php
function pryvit() {
    return "Tere päiksekesekene!";
}
echo pryvit();


/*Liitu uudiskirjaga
koosta funktsioon, mis genereerib Bootstrapi uudiskirjaga liitumise vormi (vorm ja nupp)*/


function forma() {

    return '
    <form action="" method="POST" class="w-50 mt-3">
        <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="nimfa" required>
            <button class="btn btn-primary" type="submit">Liitu uudiskirjaga</button>
        </div>
    </form>';
}
echo forma();

//Kasutajanimi ja email
//loo funktsioon, mis muudab kasutajanime väikesteks tähtedeks
//täienda funktsiooni, et kasutajanimele luuakse “@hkhk.edu.ee” lõpuga email
//täienda funktsiooni nii, et kasutajale luuakse 7-kohaline kood
//täienda koodi nii, et luuakse tähed ja numbrid läbisegamini

function stvoryty_user($imja) {
    $login = strtolower($imja);
    $poshta = $login . "@hkhk.edu.ee";
    $b = "abcdefghijklmnopqrstuvwxyz0123456789";
    $kod = $b[rand(0,35)] . $b[rand(0,35)] . $b[rand(0,35)] . $b[rand(0,35)] . $b[rand(0,35)] . $b[rand(0,35)] . $b[rand(0,35)];
    return "Login: " . $login . "<br>Email: " . $poshta . "<br>Kod: " . $kod;
}

echo stvoryty_user("Mariia");
//Arvud
// koosta funktsioon, mis lubab kasutajal valida arvude vahemikku. Näiteks 2 ja 8, tekitavad 2, 3, 4, 5, 6, 7, 8
// täienda funktsiooni nii, et saab muuta genereeritud arvude sammupikkuse. Näiteks 2 kuni 8 ja samm 3, tekitavad 2, 5, 8
function chysla($vid, $do, $krok = 1) {
    $riadok = "";
    
    // Zvychajnyj cykl, yakyj prosto pliusuye krok
    for ($i = $vid; $i <= $do; $i = $i + $krok) {
        $riadok = $riadok . $i . ", ";
    }
    
    return $riadok;
}

echo chysla(2, 8, 3);

// Ristküliku pindala
// koosta funktsioon, mis leiab kasutaja antud arvudega ristkülikupindala
function ploshcha($a, $b) {
    $s = $a * $b;
    return "Ristküliku pindala külgedega $a ja $b on " . $s;
}

echo ploshcha(5, 10);
// Isikukood
// koosta funktsioon, mis leiab, kas sisestatud isikukood on õige pikkusega
// täienda funktsiooni, et kui isikukood on kirjas leitakse sugu ja sünniaeg
function perevirka($kod) {
    if (strlen($kod) != 11) {
        return "Viga: Isikukood peab olema täpselt 11 numbrit pikk!";
    }
    $statj = "Mees";
    if ($kod[0] == 2 || $kod[0] == 4 || $kod[0] == 6) {
        $stat = "Naine";
    }
    
    $v = "19";
    if ($kod[0] == 5 || $kod[0] == 6) {
        $v = "20";
    }
    $rik = $v . $kod[1] . $kod[2];
    $misjac = $kod[3] . $kod[4];
    $den = $kod[5] . $kod[6];
    
    return "Sugu: " . $stat . "<br>Sünniaeg: " . $den . "." . $misjac . "." . $rik;
}

echo perevirka("49403130123");



// Head mõtted
// koosta funktsioon, mis hoiab endas kolme ühepikkust massiivi: alus, öeldis ja sihitis
// koosta kood, mis lehele laadimisel valib suvaliselt igast massiivist elemendi ja koostab lause

function fraza() {
    $hto = array("Kass", "Programmeerija", "Õpetaja", "Robot");
    $diia = array("kirjutab", "vaatab", "parandab", "loob");
    $shcho = array("keerulist koodi", "huvitavat raamatut", "uut veebilehte", "PHP ülesannet");
    $n1 = rand(0, 3);
    $n2 = rand(0, 3);
    $n3 = rand(0, 3);
    
    return $hto[$n1] . " " . $diia[$n2] . " " . $shcho[$n3] . ".";
}

echo fraza();