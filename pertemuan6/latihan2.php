<?php
// array associative
// definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri


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
    <h1>Daftar Mahasiswa</h1>



    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>  ">
            </li>
            <li>Nama : <?= $mhs["nama"];  ?></li>
            <li>NIM : <?= $mhs["nim"];  ?></li>
            <li>Email : <?= $mhs["email"];  ?></li>
            <li>Jurusan : <?= $mhs["jurusan"];  ?></li>
        </ul>
    <?php endforeach; ?>







</body>

</html>