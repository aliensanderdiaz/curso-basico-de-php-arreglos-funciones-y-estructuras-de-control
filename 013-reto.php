<?php
$anterior = 0;
$nuevo = 1;
for ($i=2; $i <= 10; $i++) { 
    // if ($i == 2) {
    //     echo "hay $anterior caminos para llegar al punto $i";
    //     echo "<br>";
    //     continue;
    // }

    $actual = $anterior + $nuevo;
    $anterior = $nuevo;
    $nuevo = $actual;
    
    echo "hay $actual caminos para llegar al punto $i";
    echo "<br>";
}