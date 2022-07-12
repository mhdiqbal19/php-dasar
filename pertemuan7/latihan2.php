<?php  
if( !isset($_GET["nama"]) || 
    !isset($_GET["nim"]) || 
    !isset($_GET["email"]) || 
    !isset($_GET["jurusan"]) || 
    !isset($_GET["gambar"])) {
    // redirect => memindahkan sebuah halaman  user ke halaman lain
    header("Location: latihan1.php");
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datail Mahasiswa</title>
</head>

<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li>
            <img src="img/<?= $_GET["gambar"]; ?>  ">
        </li>
        <li>NAMA : <?= $_GET["nama"]; ?> </a></li>
        <li>NIM : <?= $_GET["nim"]; ?> </a></li>
        <li>Email : <?= $_GET["email"]; ?> </a></li>
        <li>Jurusan : <?= $_GET["jurusan"]; ?> </a></li>
    </ul>

    <a href="latihan1.php"> Kembali ke Daftar Mahasiswa</a>


</body>

</html>