<?php

$name = "rifki";

$otherName = &$name;
$otherName = "ocan";

var_dump($otherName);

function increment(int &$value) {
    $value++;
}
$counter =1;
increment($counter);
echo $counter;
