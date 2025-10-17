<?php
### FOR ###
for($i=10;$i>=1;$i--){
    echo "Manusia ke-$i <br>";
}

echo "<hr>";
### WHILE ###
$awal = 1;
while($awal <= 10){
    echo "Manusia ke-$awal<br>";
    $awal++;
}

echo "<hr>";
### DO WHILE ###
$dw = 1;
do{
    echo "Manusia ke-$dw <br>";
    $dw++;
}while($dw <= 10);

echo "<hr>";
### FOREACH ###
$is63 = array("Udin","Idin","Adin");

foreach($is63 as $data){
    echo "$data <br>";
}

?>
