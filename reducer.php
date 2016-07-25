#!/usr/bin/php
<?php

$provenienze = array();

while (($line = fgets(STDIN)) !== false) {
    // Pulizia linea
    $line = trim($line);
    // Crea coppia chiave-valore dividendo la stringa in base alla tabulazione
    list($provenienza, $importo) = explode("\t", $line);
    $importo = intval($importo);
    
    // Se l'importo non è positivo, aumenta il valore collegato alla chiave
    if ($importo > 0)
        $provenienze[$provenienza] += $importo;
}

// Reducer finisce qui
// Il seguente codice espone i dati calcolati
ksort($provenienze);  // Ordinamento
foreach ($provenienze as $provenienza => $importo) {
    echo "$provenienza\t$importo\n";
}
