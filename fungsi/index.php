<?php

//cara membuat function tidak memakai class
function ngoding(){

}

//function bisa di kategorikan menggunakan public, protected, private
class vscode{
    public function coding_php(){

    }
}

//mencoba buat fungsi sapa teman
function sapa_teman(){
    echo "<h1>Hai kids
    
    <h1>";
    echo "<h3>kamu neeeeeenyeeeeeeee?, aku lagi sama siapa?<h3>";
}

//mencoba membuat fungsi yang ada paramater
function temen($temen_guweh, $umur){
    echo "<h2>hey disini guweh sama {$temen_guweh}<h2>";
    echo "<h2>umur die  {$umur}<h2>";
   
}

//cara panggil fungsi
//tuliskan nama fungsinya bersama()
sapa_teman();

// jika fungsi menggunakan parameter, harus di tulis saat pemanggilannya
temen("nazhif",10);

//mencoba membuat fungsi menggunakan percabankan
function kasir($nama, $jumlah){
    echo "<h3>hai {$nama}, terima kasih terlah berkunjung!! <h3>";
    echo "<h3> dan jangan lupa kembali lagiii!! <h3>";

    //membuat perulangan menggunakan if (jika jumlah lebih maka akan dapat hadiah)
    if ($jumlah > 10){
        echo "<h3>Anjayyyyyyy bro, kamu sudah mendapatkan mobil karena telah berkunjung sebanyak {$jumlah} kali <h3>";
    }
}
//panggil fungsinya dan isi parameternya
kasir("nazhif",12);

?>