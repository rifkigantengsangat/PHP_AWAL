<?php
function sayHello(string $message){
    echo $message;
}
sayHello('Rifki');

function sumAll (... $values)
{
    $total = 0;
    foreach($values as $value){
       $total += $value;
    }
    echo "Total".implode(",",$values). "=$total ". PHP_EOL;
}
$values = [1,2,3,4,5];
sumAll(...$values);

// function Return Value

function kembalikanNilai(int $first,int $second) :int
{
    return $first + $second;
}
$hasil = kembalikanNilai(10,10);
var_dump($hasil);

function getFinalValue(int $values):string
{
    if($values >=80){
        return "A";
    }else if($values >= 70){
        return "B";
    }else if($values >=65){
        return "C";
    }else if($values >= 50){
        return "D";
    }else{
        return "E";
    }
}

getFinalValue(80);

// variable function
function Hello (string $name,$filter)
{
    $finalName = $filter($name);
    echo $finalName;
}
function sampleFunction(string $name):string{
    return $name;
}
Hello("Rifki",'sampleFunction');
//anonymous function
$rifki = function(string $name){
   echo $name;
};
$rifki("Rifki");

//anonymous function sebagai Argument

function sayGood(string $message,$filter){
    $finalName = $filter($message);
    echo "haloo  $finalName";
}
sayGood("Rifki",function (string $name){
    return strtoupper($name);
});
$firstname = "raden";
$lastname = "rifki";
$sayHelloRifki = function() use ($firstname,$lastname){
    echo "Hello $firstname $lastname" .PHP_EOL;
};
$sayHelloRifki();

// arrow function

$arrowFunction = fn() => "Hello $firstname $lastname";

echo $arrowFunction();

// callback Function
function Callback (string $name ,callable $filter){
    $finalName = call_user_func($filter,$name);
    echo "  callback . $finalName";
}
callBack("Rifki",fn(string $name) => strtoupper($name));

// recursive function
function recursive(int $value) :int 
{
    if($value === 1){
        return 1;
    }else{
        return $value * recursive($value - 1);

    }
}
var_dump(recursive(5));

// string function 
var_dump(join(",",[10,11,12,13,14,15]));
var_dump(explode(" ","Raden Muhamad Rifki"));
var_dump(strtoupper("raden muhamad rifki"));
var_dump(strtolower("Raden Muhamad Rifki"));
var_dump(trim(       "rifki"    ));
var_dump(substr("raden Muhamad Rifki",0,4));

//array Function

$angka = [1,2,3,4,5,6,7,8,9,10];
$mapFunction = fn(int $value) => $value*10 ;
 $result =array_map($mapFunction,$angka);
 var_dump($result);
 rsort($angka);
 var_dump($angka);
 var_dump(array_keys($angka));

