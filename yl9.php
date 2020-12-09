<?php
/*
 * Ülesanne 9
 * Rain Kohv
 * 8.12.2020
 */
?>

    <html>
    <head>
        <meta charset="utf-8">
        <title>tekstitöötlus</title>
    </head>
    <body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label>Sisesta ees- ja perenimi</label> <input type="text" name="nimi"><br>
        <label>Sisesta siia sõnum</label> <input type="text" name="msg"><br>
        <input type="submit" value="Saada">
    </form>
    </body>
    </html>

<?php
$nimi = $_GET['nimi'];
$msg = $_GET['msg'];

echo 'Tere, '.ucwords($nimi).'!'."<br>";
$length = strlen($nimi);
$formatted = implode('.',str_split($nimi));
echo $formatted.'.'."<br>";

$otsi = array('noob', 'jörr', 'maun');
$asenda = '***';
echo str_replace($otsi, $asenda, $msg)."<br>";

$emailotsi = array('ö', 'õ', 'ä', 'ü');
$emailasenda = array('o', 'o', 'a', 'y');
$meil = strtolower(str_replace($emailotsi, $emailasenda, $nimi))."@khk.ee";
echo str_replace(' ', '.', $meil);