<?php
require('koneksi.php');

if(isset($_POST['submit'])){
    $nama = htmlspecialchars($_POST['nama']); 
    $jurusan = htmlspecialchars($_POST['jurusan']); 

    $sql = "INSERT INTO siswa (nama, jurusan) VALUES ('$nama', '$jurusan')";
    $conn->query($sql);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nama">
            Masukan Nama :<input type="text" name="nama" required><br>
        </label>
        <label for="jurusan">
          Jurusan Siswa :     <input type="text" name="jurusan" required><br>
        </label> 
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>