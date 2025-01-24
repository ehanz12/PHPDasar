<?php
// Konfigurasi database
$host = "localhost"; // Nama host
$username = "root";  // Username MySQL
$password = "Rhanss12345";      // Password MySQL
$database = "devacto"; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
