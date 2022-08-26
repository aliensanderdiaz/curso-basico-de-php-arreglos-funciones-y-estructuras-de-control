<?php

$edades = [18, 22, 40, 31];

// count
echo count($edades);
echo "<br>";

// array_push
array_push($edades, 13);
var_dump($edades);

echo "<br>";

// is_array
$esto_no_es_un_arreglo = "";

var_dump( is_array($esto_no_es_un_arreglo));
echo "<br>";
var_dump( is_array($edades));

echo "<br>";

// explode

$lista_de_frutas = "fresa,cereza,manzana";
$lista_de_frutas_array = explode(",", $lista_de_frutas);

var_dump($lista_de_frutas_array);

echo "<br>";
$lista_de_frutas_array = ["fresa","cereza","manzana"];
$lista_de_frutas = implode("-", $lista_de_frutas_array);

echo $lista_de_frutas;