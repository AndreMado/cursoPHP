<?php

for ($contador = 0; $contador < 10; $contador++){
    echo $contador . "\n";
}
echo "\n";


$personas = [
    "Nicol" => 24,
    "Ariana" => 20,
    "Andres" => 23,
    "Luci" => 38,
];

foreach ($personas as $persona => $edad){
    echo "Las personas en el array son $persona y tienen $edad años." . "\n";
}