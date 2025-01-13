<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: portofolio");
        exit();
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
    <h2>Data berhasil di kirim  </h2><br>
    <h3>Terima kasih <?= $_SESSION['username']?> </h3><br><br>
    <a href="log.php">Kembali</a>

</body>
</html>