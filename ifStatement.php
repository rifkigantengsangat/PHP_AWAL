<?php
$nilai = 70;
$absen = 80;

if($nilai >= 75 && $absen >= 75){
    echo "Anda Lulus" . PHP_EOL;

}else if ($nilai >= 75 && $absen >= 60){
    echo "absen Anda kurang" . PHP_EOL;
}else{
    echo "Anda Tidak Lulus" . PHP_EOL;
}
$data = [
    "action" =>null
];
if(isset($data["action"])){
    $action = $data["action"];
    var_dump($action);
}else{
   $action="nothing";
   var_dump($action);
}

$date = [];
$aksi = $date["action"] ?? "nothing";
var_dump($aksi);


