<?php

// Prosedural adalah pemograman yang tidak perlu adanya instansiasi, cukup menggunakan fungsi

// Contoh dari Prosedural
echo date('d-m-Y');//fungsi tanpa ada objek

// Contoh dari pendekatan objek

// contoh dari pendekatan objek
$date = new DateTime();//Objek
echo $date->format('d-m-Y');

?>