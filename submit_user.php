<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengecek apakah form telah disubmit dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Query untuk menambahkan data ke tabel 'users'
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>
