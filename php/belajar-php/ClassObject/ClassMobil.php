<?php

class Mycar {
    public $jenis;

    public function __construct($jenis)
    {
     $this->jenis = $jenis;   
    } 

    public function Setjenis(){
        echo $this->jenis;
    }
}

class car extends Mycar
{
    public $merk;

    public function __construct($merk)
    {
        $this->merk = $merk;
    }

    public function merk(){
        echo $this->merk;
    }
}

$jenismobil = new Mycar("Sedan");
$jenismobil->Setjenis("ceper");



$merekmobil = new car(" BMW");
$merekmobil->merk("Toyota");


?>