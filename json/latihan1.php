<?php
// $mahasiswa = [
//     [
//         "nama" => "muhammad dimas",
//     "nrp" => "097888",
//     "email" =>"muhammad.diimass@gmail.com"
//     ],
//     [
//         "nama" => "muhammad dimas",
//     "nrp" => "097888",
//     "email" =>"muhammad.diimass@gmail.com"
//     ]
// ];


$dbh = new PDO('mysql:host=localhost;dbname=db_pelaporan', 'root', '');
$db = $dbh->prepare('SELECT * FROM  pengaduans');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>