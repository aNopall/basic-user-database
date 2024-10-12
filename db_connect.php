<?php
$servername = "localhost";
$username = "root";  // Default user XAMPP adalah root
$password = "";      // Biasanya tidak ada password untuk root di XAMPP
$dbname = "my_database";  // Nama database yang sudah kamu buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil";
?>
