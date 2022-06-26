<?php 
$rifki =array(
    "ID" => 1,
    "name" => 'Rifki',
    "kelas" => "TKJ XII-1"
);
var_dump($rifki["kelas"]);

$budi = [
    "ID" => 2,
    "name" =>"BUDI",
    "kelas" => "TKJ 12",
    "alamat" => [
        "kota" => "Bogor",
        "kampung" => "cisarua",
    ]
];
var_dump($budi["alamat"]["kota"]);
