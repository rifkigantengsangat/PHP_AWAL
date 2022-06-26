<?php

//global

$name = "rifki";

function sayHello (){
    global $name;

    echo "hallo $name" .PHP_EOL;
}
sayHello();
//variable static
function increment (){
    static $counter = 1;
    echo "Counter: $counter" .PHP_EOL;
    $counter++;
}
increment();
increment();
increment();
