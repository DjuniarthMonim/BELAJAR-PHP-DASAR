<?php

$values = array(18,9,8,7.5);
var_dump ($values);

$names = ["sar", "yati","siharis"];
var_dump ($names);

var_dump ($names[0]);

$names [0] = "Budi";
var_dump ($names);

unset ($names [1]);
var_dump ($names);

$names[] = "joko";
var_dump ($names);

var_dump (count($names));

$aty = array(
"id" > "aty",
"name" > "Aty Siharis",
"age" > 30
);
var_dump ($aty);

var_dump ($aty ["name"]);

$budi =  [
"id" > "budi",
"name" > "Budo Nugraha",
"age" > 35
];








