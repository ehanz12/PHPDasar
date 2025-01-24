<?php

class Myname {
    public $name;
    public $age;

    

    //method
    public function tmpt(){
        echo(" saya adalah ". $this->name . "</br> dan saya berusia ". $this->age . " tahun");
    }

}

//membuat object
$status = new Myname();
$status->name = "reihan";
$status->age = 17;
$status->tmpt();



//akses
// echo $status->name;
// echo $status->age;
// echo $status->tmpt();



?>