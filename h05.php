/*Tervitus
koosta funktsioon, mis tervitab. Näiteks: “Tere päiksekesekene!”*/

<?php
function pryvit() {
    return "Tere päiksekesekene!";
}
echo pryvit();


/*Liitu uudiskirjaga
koosta funktsioon, mis genereerib Bootstrapi uudiskirjaga liitumise vormi (vorm ja nupp)*/


function forma_pidpysky() {

$kod_formy = '
    <form action="" method="POST" class="w-50 mt-3">
        <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="nimfa.pd@gmail.com" required>
            <button class="btn btn-primary" type="submit">Liitu uudiskirjaga</button>
        </div>
    </form>';
    
    return $kod_formy;


}
echo forma_pidpysky();

//Kasutajanimi ja email
//loo funktsioon, mis muudab kasutajanime väikesteks tähtedeks
//täienda funktsiooni, et kasutajanimele luuakse “@hkhk.edu.ee” lõpuga email
//täienda funktsiooni nii, et kasutajale luuakse 7-kohaline kood
//täienda koodi nii, et luuakse tähed ja numbrid läbisegamini

$login = strtolower($nimi);
    
    $poshta = $login . "@hkhk.edu.ee";
    
    $vsi_znaky = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $kod = ""; // spochatku tut pusto
    
    for ($i = 0; $i < 7; $i++) {
        $vypadkovyj_indeks = rand(0, strlen($vsi_znaky) - 1);
        $kod = $kod . $vsi_znaky[$vypadkovyj_indeks];
    }
    
    $rezultat_masiv = array(
        'user' => $login,
        'email' => $poshta,
        'parol' => $kod
    );
    
    return $rezultat_masiv;
}
$korystuvach = stvoryty_korystuvacha("NimfaPod");
echo "Логін: " . $korystuvach['user'] . "<br>";
echo "Пошта: " . $korystuvach['email'] . "<br>";
echo "Код: " . $korystuvach['parol'] . "<br>";

?>
