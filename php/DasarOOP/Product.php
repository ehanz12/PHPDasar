<?php 

class Product{
    //property yang dimiliki oleh setiap produk
    protected $name;
    protected $price;

    //constructor untuk menginisialisasi nama dan harga produk
    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    //method untuk mendapatkan informasi produk
    public function getInfo(){
        return "Product: $this->name, Price: Rp". number_format($this->price, 0, ',', '.');
    }


    //method untuk mendapatkan harga product
    public function getPrice(){
        return $this->price;
    }

}

//penjelasan :
//protected $name dan $price adalah property yang dimiliki oleh setiap produk.
//method __construct() digunakan untuk menginisialisasi nama dan harga produk saat objek dibuat.
//method getInfo() digunakan untuk mendapatkan informasi produk, termasuk nama dan harganya.
//method getPrice() digunakan untuk mendapatkan harga produk.


?>