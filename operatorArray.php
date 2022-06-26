<?php
// + di array adalah Union untuk menggabungkan Array
// == di array adalah equality true jika $a dan $b memiliki key- value yang sama
 // === di arrya adalah identity true jika $a dan $b memiliki key- value yang sama dan posisi yang sama 
//!= di arrya adalah inquality  true jika $a dan $b tidak sama
//  !== di arrya adalah nonidentity jika a dan b tidak identik

$first = [
    "nama_depan" => "Rifki"
];
$last = [
    "nama_belakang" => "Ganteng"
];
$full = $first + $last;

var_dump($full);

$a = [
    "firstName" => "Rifki",
    "lastName" => "Ganteng"
];
$b = [
    "lastName" => "Ganteng",
    "firstName" => "Rifki"
];
var_dump($a == $b);
var_dump($a === $b);
