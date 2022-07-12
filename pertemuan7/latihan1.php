<?php

// Variabel Superglobal
// - $_GET
// - $_POST
// - $_REQUEST
// - $_SESSION
// - $_COOKIE
// - $_SERVER
// - $_ENV

$mahasiswa = [
    [
        "nama"    => "Muhammad Iqbal",
        "nim"     => "034534543",
        "email"   => "iqbal@gmail.com",
        "jurusan" => "Sistem Informasi",
        "gambar"  => "iqbal.jpg",
    ],
    [
        "nama"    => "Zaka",
        "nim"     => "034534543",
        "email"   => "zaka@gmail.com",
        "jurusan" => "Teknik Informatika",
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h3>Daftar Mahasiswa</h3>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
                                     &nim=<?= $mhs["nim"]; ?>
                                     &email=<?= $mhs["email"]; ?>
                                     &jurusan=<?= $mhs["jurusan"]; ?>
                                     &gambar=<?= $mhs["gambar"]; ?>
                                     "><?= $mhs["nama"]; ?>
                </a>
            </li>
        </ul>
    <?php endforeach; ?>

</body>

</html>