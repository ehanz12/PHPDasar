<?php
//VariableGlobal adalah variable yang bisa digunakan 
//dalam fungsi global yang bisa dipakai di fungsi manapun yaa..
//hanya harus menggunakan function "global"
$Globalnilaix = 5;
$Globalnilaiy = 10;


function Penjumlahan(){
    global $Globalnilaix, $Globalnilaiy;
    $hasiljml = $Globalnilaix + $Globalnilaiy;
    echo  $hasiljml;
}
function Perkalian(){
    global $Globalnilaix, $Globalnilaiy;
    echo " Penjumlahan = ";
    Penjumlahan();

    echo "<br/> Perkalian = ";
    //mengakses variable lokal
    $hasilkali = $Globalnilaix * $Globalnilaiy;
    echo $hasilkali;
}
// tampilkan data
Perkalian();
?>