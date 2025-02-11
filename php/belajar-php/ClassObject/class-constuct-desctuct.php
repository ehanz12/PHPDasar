<?php
// Definisi kelas 'Mobil'
class Mobil {
    // Properti (Atribut) kelas
    private $merk;
    private $warna;

    // Constructor (Fungsi pembuat objek)
    public function __construct($merk, $warna) {
        // Menetapkan nilai properti menggunakan parameter constructor
        $this->merk = $merk;
        $this->warna = $warna;
        echo "Mobil dengan merk " . $this->merk . " dan warna " . $this->warna . " telah dibuat.<br>";
    }

    // Desctructor (Fungsi penghancur objek)
    public function __destruct() {
        // Ini akan dipanggil ketika objek dihancurkan atau tidak digunakan lagi
        echo "Mobil dengan merk " . $this->merk . " dan warna " . $this->warna . " telah dihancurkan.<br>";
    }

    // Metode untuk menampilkan informasi mobil
    public function tampilkanInfo() {
        echo "Merk: " . $this->merk . "<br>";
        echo "Warna: " . $this->warna . "<br>";
    }
}

// Membuat objek dari kelas Mobil
$mobil1 = new Mobil("Toyota", "Merah");
$mobil2 = new Mobil("Honda", "Biru");

// Menampilkan informasi mobil
$mobil1->tampilkanInfo();
$mobil2->tampilkanInfo();

// Menghapus objek secara eksplisit untuk memicu pemanggilan __destruct()
unset($mobil1);
unset($mobil2);

// Catatan: Pada saat eksekusi skrip selesai, objek yang tidak lagi digunakan akan dihancurkan otomatis
?>
<!-- Penjelasan Detil:
Definisi Kelas Mobil:

Kelas ini memiliki dua atribut/properti: $merk dan $warna, yang akan menyimpan informasi tentang mobil.
private berarti bahwa properti ini hanya bisa diakses oleh metode dalam kelas itu sendiri.
Constructor __construct:

Constructor adalah metode khusus dalam kelas yang secara otomatis dipanggil saat objek baru dibuat.
Di sini, constructor menerima dua parameter: $merk dan $warna, yang digunakan untuk menginisialisasi atribut $merk dan $warna dari objek yang dibuat.
Saat objek dibuat, constructor ini juga mencetak pesan yang memberi tahu bahwa objek mobil baru telah dibuat.
Destructor __destruct:

Destructor adalah metode yang dipanggil ketika objek dihancurkan atau ketika skrip selesai dieksekusi.
Di dalam destructor, ada pesan yang dicetak, menginformasikan bahwa objek telah dihancurkan.
Biasanya, destructor digunakan untuk membersihkan sumber daya eksternal (misalnya, menutup koneksi database), tetapi dalam contoh ini hanya untuk mencetak pesan.
Metode tampilkanInfo:

Ini adalah metode biasa dalam kelas yang menampilkan informasi tentang objek, seperti merk dan warna mobil.
Metode ini hanya dipanggil setelah objek diciptakan.
Membuat Objek Mobil:

Dua objek dibuat dari kelas Mobil menggunakan new keyword. Objek tersebut diberi nama $mobil1 dan $mobil2.
Setiap objek memanggil constructor dengan parameter yang diberikan, lalu objek tersebut disiapkan untuk digunakan lebih lanjut dalam skrip.
Menghapus Objek unset:

unset() digunakan untuk menghapus objek secara eksplisit. Ini akan memicu pemanggilan metode destructor, yang akan mencetak pesan bahwa objek tersebut telah dihancurkan.
Jika objek tidak dihapus secara eksplisit, PHP akan memanggil destructor secara otomatis saat skrip selesai dieksekusi, dan objek yang tidak lagi digunakan akan dihancurkan pada akhir skrip. -->

<!-- Kesimpulan:
__construct digunakan untuk membuat objek dan menginisialisasi properti objek ketika objek baru diciptakan.
__destruct dipanggil untuk membersihkan sumber daya atau melakukan operasi akhir ketika objek dihancurkan atau saat skrip selesai dijalankan. -->