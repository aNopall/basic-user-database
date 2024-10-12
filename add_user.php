<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna Baru</title>
</head>
<body>
    <h1>Tambah Pengguna Baru</h1>
    <form action="submit_user.php" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <button type="submit">Kirim</button>
    </form>

    <a href="list_users.php">Kembali ke Daftar Pengguna</a>
</body>
</html>
