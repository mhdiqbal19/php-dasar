<?php 
// array => variabel yang dapat memiliki 1 nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//pasangan antara key dan value
//key-nya adalah index, yang dimulai dari 0


//membuat array
//cara lama php 5 kebawah
$hari = array("Senin", "Selasa", "Rabu");

//cara baru php 7 keatas
$bulan = ["Januari", "Februari", "Maret"];

// //boleh tipe data yang berbeda
// $arr1 = [123, "string", false];

// //menampilkan array
// // var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// //menampilkan 1 elemen pada array
// echo $hari[1];
// echo "<br>";
// echo $bulan[0];

//menambahkan elemen baru pada aray
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);








?>