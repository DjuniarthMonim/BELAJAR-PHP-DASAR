<?php

goto a;
echo "Hello WOrld" . PHP_EOL;

a: 
echo "Hello A" . PHP_EOL;

$counter =1;

whhile (true) {
    echo "ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}