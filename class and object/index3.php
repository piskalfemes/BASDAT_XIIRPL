<?php
//class smkjp1

class smkjp1{
    //properti
    var $guru;
    var $murid;

    //function berdiri
    function berdiri(){
        return "berdiri dengan tegap";
    }

    function berlari(){
        return "berlari 1000 langkah";

    }

}
//intasiasi
$sekolah = new smkjp1();

//eksperimen
$smkjpone = new smkjp1();

//isi property
$sekolah->guru = "Pak saipul";
$sekolah->murid = "Ahmad K";

//tampilkan dari objek $sekolah
echo $sekolah->guru," "$sekolah->berdiri();
echo "<br/>";
echo $sekolah->murid," "$sekolah->berlari();
echo "<br/>";

//tampilkan dari objek $smkjpone
echo "<br />";
echo $smkjpone->guru,$smkjpone->berlari();
echo "<br/>";
echo $sekolah->murid,$smkjpone->berdiri();

?>