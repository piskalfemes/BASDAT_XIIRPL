<?php
//function parameter
function kalimat($kertas,$jumlah,$harga){
    echo "<h1>Saat aku menggunakan {$kertas}</h1>";
    echo "<h1>aku gunakan {$jumlah} satu lembar!</h1>";
    echo "<h1>{$jumlah} harganya {$harga}</h1>";
}
kalimat('tisu','satu lembar','2000');

//function count
$a = ['saat','aku','menggunakan','tisu'];
$b = ['aku','gunakan','satu','lembar','satu','lembar!'];
$c = ['satu','lembar','harganya','2000'];

$kata_1 = count($a);
$kata_2 = count($b);
$kata_3 = count($c);

var_dump($kata_1);
echo "<br />";
var_dump($kata_2);
echo "<br />";
var_dump($kata_3);

?>