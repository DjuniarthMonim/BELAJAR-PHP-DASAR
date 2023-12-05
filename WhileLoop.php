<?php

$counter = 1;
while ($counter <= 10) {
    echo "Ini adalah for while ke-counter" . PHP_EOL;
    $counters++;
}

$counter = 1;
while ($counter <= 10) :
    echo "Ini adalah for while ke-counter" . PHP_EOL;
    $counters++;
endwhile;