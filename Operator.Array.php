<?php

$first = [
    "first_name" => "Eko"
];

$last =[
    "first_name" => "Budi",
    "last_name" => "khannedy"
];

$full = $first + $last;
var_dump($full);

$a = [
    "last_name" => "Eko",
    "first_name" => "khannedy"
];

$b = [
    "last_name" => "khanedy",
    "first_name" => "Eko"
];

var_dump($a == $b);
var_dump($a === $b);