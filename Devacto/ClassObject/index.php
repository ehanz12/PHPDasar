<?php

class Orang{
    public $nama;
    public $umur;
    public $warnakulit;

    public function Hello($nama){
        echo  "haloo " . $nama;
    }

    public function Goodbye($nama){
        echo  "<br/>good byeeee ". $nama;
    }

    public function Umur($nama, $umur){
        echo "Umur ". $nama . " Adalah " . $umur . "<br/> ";
    }

    public function Warnakulit($nama){
        if($nama == "Jawir" || $nama == "orang jawir"){
            echo "<br/>  ".$nama . " HYTAMM";
        }else{
            echo "<br/>" . $nama ."putih";
        }
    }
}

$OrangJawir = new Orang();
$OrangJawa = new Orang();

$OrangJawir->nama = "Jajat Ank BAIK";
$OrangJawir->umur = 12;

$OrangJawir->Umur($OrangJawir->nama , $OrangJawir->umur);

$OrangJawir->Hello("Jajat");
$OrangJawir->Goodbye("Jajat Incognito");
$OrangJawir->Warnakulit("Jawir");




?>