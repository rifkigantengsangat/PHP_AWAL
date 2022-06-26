<?php

$names = ["raden","Muhamad","Rifki"];

for($i=0;$i<count($names);$i++){
    echo "data ke $i = $names[$i]". PHP_EOL;
}
foreach($names as $name){
    echo "halo $name " . PHP_EOL;
}