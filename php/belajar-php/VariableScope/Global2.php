<?php

$panjang = 6;
$lebar = 4;
$tinggi = 2;

function Luas(){
    global $panjang, $lebar;
    $LuasPP = $panjang * $lebar;
    echo "Luas Persegi panjang : ";
    echo $LuasPP;
    echo "<br/>";
}

function KelilingPP(){
    global $panjang, $lebar;
    $kelilingPP = 2 * ($panjang + $lebar);
    echo "<br/> Keliling Persegi Panjang ini :  $kelilingPP";
    echo "<br/>";
}
Luas();
KelilingPP();

function VolumeBalok(){
    global $panjang , $lebar, $tinggi;
    $volumebalok = $panjang * $lebar * $tinggi;
    echo "<br/> Volume Balok Adalah : $volumebalok";
    echo "<br/>";
}
VolumeBalok();
?>