<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


//ambil data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//cek error ada atau tidak tabel mahasiswa
// if(!$result){
//     echo mysqli_error($conn);
// }

//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row();   -> mengembalikan array numerik
//mysqli_fetch_assoc()  -> mengembalikan array associative
//mysqli_fetch_array()  -> mengembalikan array numerik dan associative, kekurangan nya adalah data disajikan double
//mysqli_fetch_object() -> 

// while($mhs = mysqli_fetch_assoc($result)){
//    var_dump($mhs);
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>


    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $no = 1;  ?>
        <?php while ($row = mysqli_fetch_assoc($result)) :    ?>
            <tr>
                <td><?= $no; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="50px"></td>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
        <?php $no++; ?>
        <?php endwhile; ?>


    </table>




</body>

</html>