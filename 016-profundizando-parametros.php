<?php

function suma($a = 1, $b = 1) {
    echo "La suma de $a + $b es: " . ($a + $b) . "<br>";
}

suma(7, 22);
suma(5, 8);
suma(7, 22);
suma(3);
suma();

echo "<br>";

$arreglo1 = [1, 2, 3];
$arreglo2 = [4, 5, 6];

$resultado = [...$arreglo1, ...$arreglo2];

var_dump($resultado);

echo "<br>";
echo "<br>";

$numeros = [1,2];

suma(...$numeros);

echo "<br>";
echo "<br>";

function suma_infinita(...$params) {
    $total = 0;
    foreach ($params as $numero) {
        $total += $numero;
    }
    echo "El total es: $total <br>";
}

suma_infinita(1,2,3);
suma_infinita(4,5,6);
suma_infinita(1,2,3,4,5,6,7,8,9);