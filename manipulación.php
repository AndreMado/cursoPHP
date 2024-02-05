<?php

$edades = [18,20,30,43,23];

//count
//echo count($edades);


// array_push
array_push($edades, 76);
//var_dump($edades);
echo "\n";

//is_array
var_dump(is_array($edades));

//explode
$listasuper = "pasta, huevo, carton, tomate";
$listasuperList = explode(",", $listasuper);
echo "\n";
//var_dump($listasuperList);

//implode
$implode = implode(",", $edades);
var_dump($implode);
