<?php

function hitung($a, $b){
    $luas = $a * $b;
    $keliling = $a - $b;
    return $luas . " " .$keliling;
}

echo "$a  sama $b dikali sama dengan  ". hitung(10, 5);

?>