#!/usr/bin/php
<?php

while (($line = fgets(STDIN)) !== false) {
    
    // Ricevuta stringa in input, dividila ad ogni ";"
    $words = preg_split('/;/', $line, 0, PREG_SPLIT_NO_EMPTY);

    // L'anno prescelto
    $year = '2016';

    // Se la stringa anno è presente nella data di check-in, estrai i dati desiderati
    if (strpos($words[4], $year) !== false) {
        echo "$words[2]\t$words[6]\n";
    }
}