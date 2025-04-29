<?php
//autoloader sederhana
//spl_autoload_register(function($class_name)){
//require_once $class_name . '.php';
//})

require_once 'Product.php';
require_once 'DigitalProduct.php';
require_once 'Book.php';

//buat object-object produk
$book1 = new Book("Clean Code",350000 ,"Robert C Martin");
$book2 = new Book("Refactoring",320000 ,"Martin Fowler");
$book3 = new Book("Pemrograman PHP",250000,"Andi");

$digitalProduct1 = new DigitalProduct("Belajar PHP OOP",120000,10);
$digitalProduct2 =new DigitalProduct("Laravel Mastery",100000,7);

//simpan pada array
$Products = [$book1, $book2, $book3,$digitalProduct1, $digitalProduct2];

//tampilkan semua info produk dan harga totalnya
$total = 0;

echo "<h2>Daftar Produk</h2>";
foreach($Products as $product){
    echo $product->getinfo() . "<br>";
    $total += $product->getPrice();
}

echo "<br><strong>Total Harga: Rp" . number_format($total, 0, ',', '.'). "</strong>";

?>