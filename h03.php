<!doctype html>
<html lang ="et">
<head>
<meta charset="UTF-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1.0" >

<title>HP harjutused</title>
</head>
<body>
    <h1>Harjutus 03</h1>
    <h2>Trapetsi pindala</h2>
    <form action="" method="get">
        a: <input type="number" name="a"><br>
        b: <input type="number" name="b"><br>
        h: <input type="number" name="h"><br>
        <input type="submit" value="Arvuta">
    </form>
    <?php
        if (!empty($_GET)) {
             $a = $_GET ['a']; 
             $b = $_GET ['b'];
             $h = $_GET ['h'];
             $s = (($a+$b)/2) * $h;
             echo "Trapetsi pindala on: ".$s. "<br>";
        }
    ?>    
</body>
</html>