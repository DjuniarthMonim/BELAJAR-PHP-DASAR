<?php

function sayHello($firstName, $lastname = "")
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello("Eko");
sayHello("Budi");
sayHello("Eko", "Kurniawa");

function sum(int $first, int $last)
{
   $total = $first + $last;
   echo "Total $first + $last = $total" .PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);

function sumAll(array $values)
{
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total" . implode(",", $value) . " = $total". PHP_EOL;
}

sumAll([1,2,3,4,5,]);