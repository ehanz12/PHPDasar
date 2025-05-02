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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .login-container {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group input:focus {
            border-color: #007BFF;
            outline: none;
        }

        .login-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #ffffff;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        .forgot-password {
            display: block;
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: #007BFF;
            text-decoration: none;
            transition: color 0.3s;
        }

        .forgot-password:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Register</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" name="submit" class="login-btn">Login</button>
            <a href="#" class="forgot-password">Forgot Password?</a>
            <?php 

            if(isset($_POST['submit'])){
                $username = htmlspecialchars($_POST['username']); 
                $password = htmlspecialchars($_POST['password']); 

                $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
                $query = $conn->query($sql);


                if($query == TRUE){
                    echo "<center?><strong style='color=green'>Data Berhasil Ditambahkan</strong></center>";
                }else{
                    echo "<center><strong style='color=red>Data Gagal Ditambahkan</strong></center>";
                } 
            }   
            ?>

        </form>
    </div>
</body>
</html>
