<?php
$mahasiswa = [
    ["Muhammad Iqbal", "0987655", "Sistem Informasi", "iqbal@gmail.com"],
    ["Muhammad Yuan", "0987655", "Sistem Informasi", "iqbal@gmail.com"],
    ["Sndika Galih", "0987655", "Teknik Informatika", "galih@gmail.com"]
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
            <li>NAMA : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>JURUSAN : <?= $mhs[2]; ?></li>
            <li>EMAIL : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>


</body>

</html>