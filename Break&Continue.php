<?php

for ($counter = 1; <= 100; $counter++) {
    if($counter % 2 == 0){
        continue; 
    }
    echo "Counter : $counter" . PHP_EOL;
}