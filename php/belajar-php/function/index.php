<?php

function hitung($a, $b, $c){
    $luas = $a * $b;
    $keliling = $a * $b *$c;
    return $luas . " " .$keliling;
}

echo " dikali sama dengan </br> ". hitung(10, 5, 5);
//pertemuan 2


function cetaklayar($nama = "kucing"){
    echo "hai nama saya <h1>$nama</h1>";
}

cetaklayar("farhan");


function tambah ($bil1, $bil2){
    global $hasil;
    $bil3 =[ $bil1, $bil2, $bil1 + $bil2];
    return $bil3;

}
$jawa = tambah(1,2,3);
echo "hasilnya adalah </br>";
echo $jawa[0];
echo $jawa[1];
echo $jawa[2];



?>