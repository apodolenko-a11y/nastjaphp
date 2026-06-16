
<?php
header('Content-Type: text/html; charset=utf-8');

//praegune aeg
echo "<h2>Praegune aeg</h2>";
echo "Tänane kuupäev: " . date("d.m.Y") . "<br>"; 
echo "Kellaaeg: " . date("H:i:s") . "<br>"; 



//ajatempel
echo "<h2>Ajatempel</h2>";
$aeg = time();
echo "Praegune UNIX ajatempel: " . $aeg . "<br>";
echo "Kuupäev sellest ajatemplist: " . date("d.m.Y H:i", $aeg) . "<br>"; 
//kuup. arvutamine
echo "<h2>Kuupäevaga arvutamine</h2>";
echo "7 päeva pärast: " . date("d.m.Y", strtotime("+7 days")) . "<br>"; 
echo "30 päeva tagasi: " . date("d.m.Y", strtotime("-30 days")) . "<br>"; 
echo "Järgmine esmaspäev: " . date("d.m.Y", strtotime("next Monday")) . "<br>"; 
echo "Eelmine reede: " . date("d.m.Y", strtotime("last Friday")) . "<br>"; 
echo "Ühe aasta pärast: " . date("d.m.Y", strtotime("+1 year")) . "<br>"; 



echo "<h2>Vanuse arvutamine</h2>";
$synniaasta = 2008;
$praegune_aasta = date("Y"); 
$vanus = $praegune_aasta - $synniaasta;

echo "Sinu vanus: " . $vanus . " aastat<br>";



//kontrllimine
echo "<h2>Kontrollimine ja eestistamine</h2>";

if (checkdate(2, 31, 2026)) { 
    echo "Kuupäev 31.02.2026 on õige.<br>";
} else {
    echo "Kuupäev 31.02.2026 on vale!<br>"; 
}



$kuud = ["", "jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"];
$kuu_number = date("n");
echo "Praegune kuu eesti keeles: " . $kuud[$kuu_number] . "<br>"; 
?>