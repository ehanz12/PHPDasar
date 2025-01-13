<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'databuku');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['message']);

    // Cek apakah password dan konfirmasi password sama
        // Cek apakah username sudah ada di database
        $sql = "SELECT * FROM messageportopolio WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $error = "Pesan gagal Dikirim!";
        } else {
            // Enkripsi password
            // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Masukkan data pengguna baru ke database
            $sql = "INSERT INTO messageportopolio (username, email, message) VALUES ('$username', '$email', '$pesan')";
            if ($conn->query($sql) === TRUE) {
                $_SESSION['username'] = $username;
                header("Location: dashboard.php");
                exit;
            } else {
                $error = "Pendaftaran gagal: " . $conn->error;
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Portfolio "Reihan Aditya Putra"</h1>
        <p>Halo! Saya adalah seorang siswa yang sedang belajar pemrograman. Saya sangat tertarik untuk mempelajari berbagai bahasa pemrograman dan cara mengembangkan aplikasi sederhana.</p>
        
        <div class="profile">
            <img src="/asets/call-of.png" alt="">
        </div>

        <h3>Minat Saya</h3>
        <ul>
            <li>Belajar bahasa pemrograman</li>
            <li>Pemrograman aplikasi web</li>
            <li>Desain antarmuka pengguna</li>
        </ul>

        <h3>Informasi Pribadi</h3>
        <table>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>Jakarta, 1 Januari 2006</td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>SMAN 1 Jakarta</td>
            </tr>
            <tr>
                <td>GitHub</td>
                <td><a href="https://GitHub.com/ehanz12">GitHub saya</a></td>
            </tr>
        </table>

        <h3>Hubungi Saya</h3>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form action="" method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Pesan:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
