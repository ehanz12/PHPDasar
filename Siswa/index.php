<?php
require '/Siswa/include/auth.php';
require '/Siswa/include/db.php';

$result = $conn->query("SELECT * FROM siswas");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/Siswa/css/style.css">
</head>
<body>
    <a href="add.php">Tambah Siswa</a> | <a href="logout.php">Logout</a>
    <h2>Data Siswa</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['kelas']; ?></td>
                <td><?php echo $row['nilai']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a> |
                    <a href="delete.php?id=<?php echo $row['id'];?>">Hapus</a>
                </td>
            </tr>
        <?php  endwhile;?>
    </table>
</body>
</html>