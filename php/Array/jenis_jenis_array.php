<?php

//indexed arrays
// Array jenis ini memiliki indeks numerik yang dimulai dari 0. 
// Array ini biasanya digunakan ketika data yang disimpan 
// tidak memerlukan kunci yang spesifik.
echo "contoh indexed arrays <br>";
$buah = array("Apel", "Jeruk", "Mangga");
echo $buah[0]."<br>";  // Output: Apel
echo $buah[1]."<br>";  // Output: Jeruk
echo $buah[2]."<br>"."<hr>";  // Output: Mangga

//associative arrays
// Array asosiatif menggunakan kunci yang bersifat string 
// (bukan angka) untuk mengakses nilai-nilai di dalamnya. 
// Ini memungkinkan kita memberi nama kunci yang lebih deskriptif.
echo "contoh associative arrays <br>";
$hargaBuah = array(
    "apel" => 10000,
    "jeruk" => 8000,
    "mangga" => 12000
);
echo $hargaBuah["apel"]."<br>";  // Output: 10000
echo $hargaBuah["jeruk"]."<br> <hr>"; // Output: 8000

//multidimensional arrays
// Array multidimensi adalah array yang memiliki array lain 
// di dalamnya. Biasanya digunakan untuk menyimpan data 
// dalam bentuk tabel atau grid.
echo "contoh multidimensional arrays <br>";
$kelas = array(
    array("Nama" => "Budi", "Nilai" => 85),
    array("Nama" => "Siti", "Nilai" => 90),
    array("Nama" => "Agus", "Nilai" => 78)
);
echo $kelas[0]["Nama"]."<br>";  // Output: Budi
echo $kelas[1]["Nilai"]."<br> <hr>"; // Output: 90

?>
