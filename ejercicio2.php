<?php

$cantidad_de_dinero = readline("Ingresa el número de dinero disponible: ");

if ($cantidad_de_dinero >= 100 ){
    echo "Se retiró el dinero";
} else {
    echo "No alcanzas el dinero suficiente para retirar tu dinero";
}
echo "\n";

$contador = 0;

while ($contador < 10){
    echo "El contador actualmente es $contador";
    $contador++;
    echo "\n";
}