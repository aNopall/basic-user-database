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

// Query untuk mengambil data dari tabel 'users'
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
</head>
<body>
    <h1>Daftar Pengguna</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>

        <?php
        // Jika ada data dalam tabel
        if ($result->num_rows > 0) {
            // Menampilkan data setiap baris
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["email"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
        }
        ?>
    </table>
    
    <h1>Tambah Pengguna Baru</h1>
    <form action="submit_user.php" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <button type="submit">Kirim</button>
    </form>
</body>
</html>

<?php
// Menutup koneksi
$conn->close();
?>
