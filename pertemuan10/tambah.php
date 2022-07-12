<?php
require 'functions.php';
//cek tomboh submit
if (isset($_POST["submit"])) {

    // cek data berhasil disimpan atau gagal
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    };
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>

<body>

    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nim">EMAIL :</label>
                <input type="email" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">JURUSAN :</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gamabar">GAMBAR :</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>

</body>

</html>