<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "dataBuku");

$query = "SELECT * FROM buku";
$hasil = mysqli_query($conn, $query);
echo "<table border ='1'>";
echo "<tr style='text-align: center;'>
        <td>Kode Buku</td>
        <td>Judul</td>
        <td>Penulis</td>
        <td>Cetakan</td>
        <td>Tahun</td>
        <td>ACTION</td>
    </tr>";

    while($data = mysqli_fetch_array($hasil)){
        echo "<tr>
                <td>".$data['kodebuku']."</td>
                <td>".$data['judul']."</td>
                <td>".$data['penulis']."</td>
                <td>".$data['cetakan']."</td>
                <td>".$data['tahun']."</td>
                <td><a href ='edit.php?kodebuku".$data['kodebuku']."'>edit</a></td>
                </tr>";
    }
    echo "</table>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListBuku</title>
    <style>
        button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <button style="margin-bottom: 10px;"><a href="TambahBuku.php">Tambahkan Buku Disini</a></button>    
</body>
</html>