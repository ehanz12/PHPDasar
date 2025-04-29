<?php

require_once 'Product.php';

class DigitalProduct extends Product{
    protected $filesize;

    public function __construct($name, $price, $filesize){
        parent::__construct($name, $price);
        $this->filesize = $filesize;
    }

    public function getinfo(){
        return "Digital Product: {$this->name}, Size: {$this->filesize} MB, Price: Rp" . number_format($this->price,0,',','.');
    }
}


?>