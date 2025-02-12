<?php

class Mycar {
    public $mobil;
    public $merk;

    public function __construct($mobil, $merk)
    {   
     $this->mobil = $mobil; 
     $this->merk = $merk;
     echo "Mobil jenis $mobil telah dibuat ". "dan mobil ini ". $this->merk . " <br/>";
    } 

    public function info(){
       echo "mobil : " . $this->mobil . "<br/>";
       echo "merk : " . $this->merk . "<br/>";
    }
}

class car extends Mycar
{
    public $nama; 

    public function __construct($mobil, $merk, $nama){
        parent::__construct($mobil, $merk);
        $this->nama = $nama;

    }
   public function info(){
       echo "nama : " . $this->nama . "<br>";
       parent::info();

    }
}

$jenismobil = new Mycar("Sedan", "ceper");
$merekmobil = new Mycar(" BMW", "Mercedes");
$jenismobil->info();
$merekmobil->info();

$pemilik = new car("BWM", "sedan", "sabrina");
$pemilik->info();


?>