<?php
$values = array(1,2,3,4,5);
var_dump($values);
$names = ['rifki','raden','muhamad'];
// var_dump($names[2]);
unset($values[1]);
 var_dump($values);
 $names[]= "ocan";
 var_dump($names);
 var_dump(count($names));