<?php

$edades = [
    "Carlos" => 18,
    "Andres" => 23,
    "Nicolly" => 24,
    "Ariana" => 20,
];

echo "La edad de Andres es " . $edades["Andres"];
echo "\n";

echo "La edad de Ariana es {$edades["Ariana"]}";
echo "\n";

$personas = [
    "Carlos" => [
        "edad" => 18,
        "apellido" => "Juas",
        "Zodiac" => "Cancer",
    ],
    "Andres" => [
        "edad" => 23,
        "apellido" => "Maldonado",
        "Zodiac" => "Cancer",
    ],
    "Coli" => [
        "edad" => 24,
        "apellido" => "Cortazar",
        "Zodiac" => "Zodiac",
    ],
];

echo "La edad de Coli es " . $personas["Coli"]["edad"];
echo "\n";