<?php
/*
 * Ülesanne 3
 * Rain Kohv
 * 26.11.2020
 */
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Romb ja trapets</title>
</head>
<body>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label>Sisesta siia Alus 1</label> <input type="text" name="alus1"><br>
    <label>Sisesta siia Alus 2</label> <input type="text" name="alus2"><br>
    <label>Sisesta siia Kõrgus</label> <input type="text" name="korgus"><br>
    <input type="submit" value="Saada">
</form>
</body>
</html>

<?php
$alus1 = $_GET['alus1'];
$alus2 = $_GET['alus2'];
$korgus = $_GET['korgus'];


$tpindala = (($alus1+$alus2)/2)*$korgus;
$romb = 4*$alus1;

echo "Trapetsi pindala on $tpindala ja rombi ümbermõõt on $romb";
?>