<?php
$host = "localhost"; // Server database
$user = "root";      // Username MySQL
$pass = "Rhanss12345";          // Password MySQL
$db   = "php"; // Nama database

// Buat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi sukses! 🎉";

// Contoh query
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

// Tutup koneksi
mysqli_close($conn);
?>