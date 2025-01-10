<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "dataBuku");
$kodebuku = $_GET ['kodebuku'];
$query = "SELECT * FROM buku WHERE kodebuku = '$kodebuku'";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_array($hasil);
echo "<form action='update.php' method='post'>";
echo "<table>";
echo "<tr>
        <td>Kode Buku</td>
        <td><input type='text' name='kodebuku' value='". $data['kodebuku']."'></td></tr>";
    "<tr>
        <td>Judul</td>
        <td><input type='text' name='judul' value='". $data['judul']."'></td>
    </tr>";
echo "<tr>
        <td>Penulis</td>
        <td><input type='text' name='penulis' value='". $data['penulis']."'></td>
    </tr>";
echo "<tr>
        <td>Cetakan</td>
        <td><input type='text' name='penulis' value='". $data['cetakan']."'></td>
    </tr>";
echo "<tr>
        <td>tahun</td>
        <td><input type='text' name='penulis' value='".$data['tahun']."'></td>
    </tr>";
echo "</table>";
echo "<input type='submit' name='submit' value='submit'>";
 echo "</form>";       
?>
