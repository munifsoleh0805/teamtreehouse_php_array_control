<?php

$data=[
    "Name"=>"Munif soleh",
    "Age"=>16,
    "Musician"=>true,
    "Height"=>1.69,
    1=>"Angka satu",
    false=>"Benar",
    2.5=>"Dua"
];
print_r($data);


$task1=array(
    "title"=>"clean motorcycle",
    "priority"=>"medium",
    "complete"=>true
);

$task2=array(
    "title"=>"watch movies",
    "priority"=>"medium",
    "complete"=>false
);

$task3="all taks was done"; // string

$todo=array($task1,$task2,$task3);

echo $todo[0]["title"];
echo PHP_EOL;
echo $todo[2];

//Short array bracket []

/**
 * sampai sini
 * https://teamtreehouse.com/libary/multidimensional-arrays
 */