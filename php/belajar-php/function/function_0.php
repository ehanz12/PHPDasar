<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan dengan Function</title>
</head>
<body>
<?php   
// Membuat Function
function ulang($angka, $tulisan)
{
for($i=0; $i<$angka; $i++)
{
echo "$tulisan <br>";
}
}
// Menggunakan atau memanggil function
// menampilkan tulisan sebanyak 10 kali
echo "<h1> INI TAMPILANNYA DARI FUNGSI YANG DIJALANKAN </h1>";
ulang(10,"Panduan Praktis Pemrograman PHP Untuk Pemula");
?>
</body>
</html>

