<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<h2>Harjutus 05</h2>
<!-- Tüdrukud
koosta vähemalt 8 tüdruku nimedega massiiv
kasuta funktsiooni sort(), et sorteerida
väljastada need kasvavas järjekorras ning kuvada ridade kaupa
väljasta tüdrukute nimekirjast eraldi esimesed 3 nime
väljasta eraldi viimane nimi
väljasta eraldi üks suvaline nimi (suvaline arv genereeritakse vastavalt massiivis olevate elementide arvule) -->
<?php
    $tydrukud = array('mari', 'kati', 'julia', 'mini','annika', 'anni', 'mann','juuli');
    sort($tydrukud);
    $counter = 0
    echo "<ul>";
    foreach($tydrukud as $tydruk){
        echo "<li>$tydruk</li>";
        $counter+=1;
    }
    