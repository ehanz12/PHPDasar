<?php

require_once 'Product.php'; //pastiak file Product.php sudah di include
class Book extends Product{
    private $author;

    public function __construct($name, $price, $author){
        parent::__construct($name, $price); //memanggil konstruktor parent
        $this->author = $author;
    }

    public function getInfo(){
        return "Book: {$this->name}, By: {$this->author}, Price: Rp". number_format($this->price,0,',','.');
    }
}

//penjelasan :
//Book mewarisi Product, sehingga dapat menggunakan properti dan method dari Product.
//tambahkan properti $author untuk menyimpan nama penulis buku.
//method getInfo() diubah untuk menampilkan informasi buku, termasuk nama dan penulisnya.


?>