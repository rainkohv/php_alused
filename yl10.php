
<html>
<menu>
    <a href="yl10.php">Avaleht</a>
    <a href="yl10.php?leht=yl1">yl1</a>
    <a href="yl10.php?leht=yl2">yl2</a>
</menu>
</html>

<?php
if(!empty($_GET['leht'])){
    $leht = $_GET['leht'];
    if(is_numeric($leht)){
        include('leht'.$leht.'.php');
    }
    $lubatud = array('yl1','yl2');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
} else {}
?>