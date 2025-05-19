<?php
require('koneksi.php');

if(isset($_POST['submit'])){
    // Validasi input
    if(empty($_POST['nama']) || empty($_POST['jurusan'])) {
        $error = "Semua field harus diisi!";
    } else {
        // Sanitasi input
        $nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING); 
        $jurusan = filter_var($_POST['jurusan'], FILTER_SANITIZE_STRING);
        
        try {
            $stmt = $conn->prepare("INSERT INTO siswa (nama, jurusan) VALUES (?, ?)");
            $stmt->bind_param("ss", $nama, $jurusan);
            
            if($stmt->execute()) {
                $success = "Data Berhasil Disimpan";
                header("Location: index.php?status=success");
                exit();
            } else {
                $error = "Gagal menyimpan data: " . $stmt->error;
            }
            $stmt->close();
        } catch(Exception $e) {
            $error = "Terjadi kesalahan: " . $e->getMessage();
        }
    }
    $conn->close();
    $stmt->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Siswa</title>
</head>
<body>
    <?php if(isset($error)): ?>
        <div style="color: red; margin-bottom: 10px;"><?php echo $error; ?></div>
    <?php endif; ?>
    
    <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div style="color: green; margin-bottom: 10px;">Data berhasil disimpan!</div>
    <?php endif; ?>

    <form action="" method="post">
        <label for="nama">
            Masukan Nama :<input type="text" name="nama" id="nama" required><br>
        </label>
        <label for="jurusan">
            Jurusan Siswa : <input type="text" name="jurusan" id="jurusan" required><br>
        </label> 
        <button type="submit" name="submit">Submit</button><br>
    </form>
</body>
</html>