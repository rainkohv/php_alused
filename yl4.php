<?php
/*
 * Ülesanne 4
 * Rain Kohv
 * 01.12.2020
 */
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Romb ja trapets</title>
</head>
<body>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label>Sisesta siia esimene täisarv</label> <input type="text" name="arv1"><br>
    <label>Sisesta siia teine täisarv</label> <input type="text" name="arv2"><br>
    <input type="submit" value="Saada">
</form>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label>Sisesta siia esimene vanus</label> <input type="text" name="vanus1"><br>
    <label>Sisesta siia esimene vanus</label> <input type="text" name="vanus2"><br>
    <input type="submit" value="Saada">
</form>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label>Sisesta siia esimene külg</label> <input type="text" name="kylg1"><br>
    <label>Sisesta siia teine külg</label> <input type="text" name="kylg2"><br>
    <label>Sisesta siia kolmas külg</label> <input type="text" name="kylg3"><br>
    <label>Sisesta siia neljas külg</label> <input type="text" name="kylg4"><br>
    <input type="submit" value="Saada">
</form>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label>Sisesta siia sünniaasta</label> <input type="text" name="synnia"><br>
    <input type="submit" value="Saada">
</form>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label>Sisesta siia punktide arv</label> <input type="text" name="punktid"><br>
    <input type="submit" value="Saada">
</form>
</body>
</html>

<?php
$arv1 = $_GET['arv1'];
$arv2 = $_GET['arv2'];
$vanus1 = $_GET['vanus1'];
$vanus2 = $_GET['vanus2'];
$kylg1 = $_GET['kylg1'];
$kylg2 = $_GET['kylg2'];
$kylg3 = $_GET['kylg3'];
$kylg4 = $_GET['kylg4'];
$synnia = $_GET['synnia'];
$punktid = $_GET['punktid'];

switch($punktid){
    case ($punktid >= 10): echo 'SUPER!';
        break;
    case ($punktid >= 5): echo 'TEHTUD!';
        break;
    case ($punktid < 5): echo 'KASIN!';
        break;
    default: echo 'Sisesta punktid';
}
?>