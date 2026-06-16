
<?php
// autod
// Autod – koosta auto markidest ja VIN koodideset massiivid
// Teosta järgmised protseduurid:
// leia autode arv (count)
// kontrolli, kas massiviid on ühepikkused
// leia eraldi Toyotade ja Audide arv nimekirjas
// leia ja väljasta VIN koodid,  mille märkide arv on väiksem kui 17

echo "2) Autod ja VIN\n";

$autod = array(
    "Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
    "Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
    "Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
    "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
    "Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
    "Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford"
);

$vin = array(
    "1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570",
    "1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049",
    "2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665",
    "WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355",
    "SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662",
    "WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043",
    "1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691",
    "3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293",
    "1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744",
    "TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051",
    "SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172",
    "2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452",
    "5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024",
    "1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295",
    "1N6AA0EDXFN868772", "WBADW3C59DJ422810"
);
$autode_arv = count($autod);
$vin_arv = count($vin);
echo "Autode arv: " . $autode_arv . "\n";
if ($autode_arv == $vin_arv) {
    echo "Massiivid on yhepikkused.\n";
} else {
    echo "Massiivid EI ole yhepikkused!\n";
}

$toyota = 0;
$audi = 0;


foreach ($autod as $mark) {
    if ($mark == "Toyota") { $toyota++; }
    if ($mark == "Audi") { $audi++; }
}


echo "Toyotasid: $toyota\nAudisid: $audi\n";

echo "VIN koodid, mille pikkus < 17:\n";
foreach ($vin as $v) {
    if (strlen($v) < 17) {
        echo $v . " (pikkus: " . strlen($v) . ")\n";
    }
}
echo "---------------------------------\n";
// keskmised palgad
// Keskmised palgad –
// leia 2018 palkade keskmine
// leia palkade maksimum ja miinimum

echo "3) Keskmised palgad (2018)\n";

$palgad2018 = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);

$summa = 0;
foreach ($palgad2018 as $p) {
    $summa = $summa + $p;
}
$keskmine = $summa / count($palgad2018);
echo "2018 keskmine palk: " . round($keskmine, 2) . "\n";
echo "---------------------------------\n";


// firmad tekita firma nimedes massiiv ja korrasta
// kuva firmade nimed
// kasutajal on võimalik nime järgi firmasid eemaldada (kuva nimekiri uuesti)
echo "4) Firmad\n";
$firmad = array("Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo","Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia");
sort($firmad);

// imja firmi
$eemalda_nimi = "Mynte"; 
$uus_firmad = array();
foreach ($firmad as $f) {
    if ($f != $eemalda_nimi) {
        $uus_firmad[] = $f;
    }
}
$firmad = $uus_firmad;
echo "Eemaldatud: $eemalda_nimi\n";

echo "Firmade nimekiri:\n";
foreach ($firmad as $f) {
    echo "- " . $f . "\n";
}
echo "---------------------------------\n";

// Riigid
// kuva kõige pikema riigi nime märkide arv
echo "5) Riigid\n";
$riigid = array(
    "Indonesia","Canada","Kyrgyzstan","Germany","Philippines",
    "Philippines","Canada","Philippines","South Sudan","Brazil",
    "Democratic Republic of the Congo","Indonesia","Syria","Sweden",
    "Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France",
    "Kazakhstan","Cuba","Portugal","Czech Republic"
);
$max_pikkus = 0;
foreach ($riigid as $r) {
    if (strlen($r) > $max_pikkus) {
        $max_pikkus = strlen($r);

    }
}

echo "Koige pikema riigi nime märkide arv: $max_pikkus\n";

echo "---------------------------------\n";

// kitajski imena
// soreeri nimed kasvavas järjekorras
// kuva esimene ja viimane nimi
echo "6) Hiina nimed\n";
$hiina = array(
    "瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳",
    "思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪",
    "璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美"
  );
sort($hiina);

echo "Esimene nimi: " . $hiina[0] . "\n";
echo "Viimane nimi: " . $hiina[count($hiina) - 1] . "\n";
echo "---------------------------------\n";

// google nimed
// kasuta enda “otsingumootorit” (ehk loo muutuja otsingusõnaga), et leida massiivi funktsioon, mis aitab leida, kas kasutaja otsitav nimi on olemas
// väljasta täislause ja kuva Bootstrap Alert kastis
echo "7) Google nimed (otsing)\n";
$google = array(
    "Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett",
    "Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
    "Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
    "Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
    "Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes"
);
// imja dla poshuku
$otsi = "Reyes"; 
$leitud = false;

foreach ($google as $g) {
    if ($g == $otsi) {
        $leitud = true;
    }
}



if ($leitud == true) {
    echo "Nimi $otsi on olemas!\n";
} else {
    echo "Nime $otsi ei leitud.\n";
}

echo "---------------------------------\n";
// Kooli IT inventar
// Teosta järgmised tegevused:

// ühenda kõik kolm massiivi funktsiooniga array_merge();
// kuva ühendatud massiiv;
// kuva seadmete koguarv;
// sorteeri seadmed tähestikuliselt;
// eemalda korduvad seadmed funktsiooniga array_unique();
// kuva seadmete koguarv pärast duplikaatide eemaldamist;
// kuva lõplik korrastatud nimekiri.

header('Content-Type: text/html; charset=utf-8');
$arvutiklass = ["Monitor", "Klaviatuur", "Hiir", "Kõrvaklapid", "Veebikaamera", "Printer", "Projektor", "Mikrofon", "Kõlarid"];
$opetajad = ["Sülearvuti", "Monitor", "Printer", "Tahvelarvuti", "Dokumendikaamera", "Veebikaamera", "Kõrvaklapid", "Mikrofon"];
$serveriruum = ["Server", "UPS", "Switch", "Ruuter", "Tulemüür", "Võrgukaabel", "Patch-paneel", "Serverikapp", "Varutoiteplokk"];
echo "<h2>Kooli IT inventar</h2>";
$koik_seadmed = array_merge($arvutiklass, $opetajad, $serveriruum);

echo "<b>Ühendatud massiiv:</b><br>";
foreach ($koik_seadmed as $seade) {
    echo $seade . ", ";
}
echo "<br><br>";
$koguarv_enne = count($koik_seadmed);
echo "Seadmete koguarv: " . $koguarv_enne . "<br><br>";

sort($koik_seadmed);
$puhtad_seadmed = array_unique($koik_seadmed);
$koguarv_parast = count($puhtad_seadmed);
echo "Seadmete koguarv pärast duplikaatide eemaldamist: " . $koguarv_parast . "<br><br>";

echo "<b>Lõplik korrastatud nimekiri:</b><br>";
foreach ($puhtad_seadmed as $seade) {
    echo "- " . $seade . "<br>";

}



?>


